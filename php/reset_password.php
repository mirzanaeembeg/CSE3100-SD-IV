<?php
session_start();
require 'db_connection.php'; // Ensure this file is included for database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Check if email exists in the users table
    $query = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));

        // Store token in the password_resets table
        $query = $conn->prepare("INSERT INTO password_resets (email, token) VALUES (?, ?)");
        $query->bind_param("ss", $email, $token);
        $query->execute();

        // Send password reset email
        $resetLink = "http://yourdomain.com/new_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Click the following link to reset your password: " . $resetLink;
        $headers = "From: no-reply@yourdomain.com";

        if (mail($email, $subject, $message, $headers)) {
            $_SESSION['message'] = "Password reset link has been sent to your email.";
        } else {
            $_SESSION['error'] = "Failed to send email. Please try again.";
        }
    } else {
        $_SESSION['error'] = "No account found with that email address.";
    }

    header("Location: forget_password.html");
    exit();
}
?>
