<?php
session_start();
require_once 'db_connection.php';

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = "Invalid email format";
        header("Location: personal_info.php");
        exit();
    }

    // Prepare and execute the update query
    $stmt = $conn->prepare("UPDATE users SET name = ?, contact = ?, email = ?, address = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $name, $contact, $email, $address, $user_id);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Personal information updated successfully";
    } else {
        $_SESSION['error_message'] = "Error updating information: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to personal_info.php
    header("Location: personal_info.php");
    exit();
} else {
    // If not a POST request, redirect to personal_info.php
    header("Location: personal_info.php");
    exit();
}
?>