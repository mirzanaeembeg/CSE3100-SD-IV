<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "bechakenaDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$upload_dir = "user_uploads/";
$max_file_size = 5 * 1024 * 1024; // 5 MB

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profilePicture"])) {
    $file = $_FILES["profilePicture"];
    
    // Check for errors
    if ($file["error"] !== UPLOAD_ERR_OK) {
        echo "Upload failed with error code " . $file["error"];
        exit();
    }
    
    // Check file size
    if ($file["size"] > $max_file_size) {
        echo "File is too large. Maximum size is 5 MB.";
        exit();
    }
    
    // Check file type
    $allowed_types = ["image/jpeg", "image/png", "image/gif"];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $file_type = finfo_file($finfo, $file["tmp_name"]);
    if (!in_array($file_type, $allowed_types)) {
        echo "Invalid file type. Only JPG, PNG, and GIF are allowed.";
        exit();
    }
    
    // Generate a unique filename
    $extension = pathinfo($file["name"], PATHINFO_EXTENSION);
    $new_filename = uniqid("profile_") . "." . $extension;
    $upload_path = $upload_dir . $new_filename;
    
    // Move the uploaded file
    if (!move_uploaded_file($file["tmp_name"], $upload_path)) {
        echo "Failed to move uploaded file.";
        exit();
    }
    
    // Update the database with the new profile picture path
    $sql = "UPDATE users SET profile_picture = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $upload_path, $user_id);
    
    if ($stmt->execute()) {
        echo "Profile picture updated successfully.";
        // Redirect back to the profile page
        header("Location: profile.php");
        exit();
    } else {
        echo "Error updating profile picture: " . $conn->error;
    }
    
    $stmt->close();
} else {
    echo "No file uploaded or invalid request.";
}

$conn->close();
?>