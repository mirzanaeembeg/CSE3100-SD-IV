<?php
session_start();
require_once 'db_connection.php';

if (!isset($_SESSION['user_id']) || !isset($_POST['item_id']) || !isset($_POST['quantity'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$item_id = $_POST['item_id'];
$quantity = $_POST['quantity'];

// Start transaction
$conn->begin_transaction();

try {
    // Get item price and user credit
    $stmt = $conn->prepare("SELECT current_bid FROM auction_items WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $item_price = $stmt->get_result()->fetch_assoc()['current_bid'];

    $stmt = $conn->prepare("SELECT credit FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $user_credit = $stmt->get_result()->fetch_assoc()['credit'];

    $total_price = $item_price * $quantity;

    // Check if user has enough credit
    if ($user_credit < $total_price) {
        throw new Exception("Insufficient credit");
    }

    // Update user credit
    $new_credit = $user_credit - $total_price;
    $stmt = $conn->prepare("UPDATE users SET credit = ? WHERE id = ?");
    $stmt->bind_param("di", $new_credit, $user_id);
    $stmt->execute();

    // Create order
    $stmt = $conn->prepare("INSERT INTO orders (user_id, item_id, quantity, order_price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiid", $user_id, $item_id, $quantity, $total_price);
    $stmt->execute();

    // Commit transaction
    $conn->commit();

    header("Location: my_orders.php?success=1");
} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    header("Location: my_orders.php?error=" . urlencode($e->getMessage()));
}

$conn->close();
?>