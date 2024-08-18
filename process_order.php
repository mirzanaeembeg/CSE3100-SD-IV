<?php
session_start();
require_once 'db_connection.php';

if (!isset($_SESSION['user_id']) || !isset($_POST['product_id']) || !isset($_POST['price']) || !isset($_POST['quantity']) || !isset($_POST['address']) || !isset($_POST['contact'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$total_price = $price * $quantity;

// Start transaction
$conn->begin_transaction();

try {
    // Check user credit
    $stmt = $conn->prepare("SELECT credit FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $user_credit = $stmt->get_result()->fetch_assoc()['credit'];

    if ($user_credit < $total_price) {
        throw new Exception("Insufficient credit");
    }

    // Update user credit
    $new_credit = $user_credit - $total_price;
    $stmt = $conn->prepare("UPDATE users SET credit = ? WHERE id = ?");
    $stmt->bind_param("di", $new_credit, $user_id);
    $stmt->execute();

    // Create order
    $stmt = $conn->prepare("INSERT INTO orders (user_id, product_id, quantity, order_price, address, contact) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiidss", $user_id, $product_id, $quantity, $total_price, $address, $contact);
    $stmt->execute();

    // Commit transaction
    $conn->commit();

    header("Location: my_orders.php?success=1");
} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    header("Location: shoes.php?error=" . urlencode($e->getMessage()));
}

$conn->close();
?>