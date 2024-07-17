<?php
session_start();
include 'db_connect.php';

// Check if user is logged in (you'll need to implement user authentication)
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'You must be logged in to place a bid.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id'];
    $bid_amount = $_POST['bid_amount'];
    $user_id = $_SESSION['user_id'];

    // Check if the bid is higher than the current bid
    $sql = "SELECT current_bid FROM auction_items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $current_bid = $result->fetch_assoc()['current_bid'];

    if ($bid_amount <= $current_bid) {
        echo json_encode(['success' => false, 'message' => 'Your bid must be higher than the current bid.']);
        exit;
    }

    // Start a transaction
    $conn->begin_transaction();

    try {
        // Update the current bid in auction_items
        $sql = "UPDATE auction_items SET current_bid = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("di", $bid_amount, $item_id);
        $stmt->execute();

        // Insert the new bid into the bids table
        $sql = "INSERT INTO bids (item_id, user_id, bid_amount) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iid", $item_id, $user_id, $bid_amount);
        $stmt->execute();

        // Commit the transaction
        $conn->commit();

        echo json_encode(['success' => true, 'new_bid' => $bid_amount]);
    } catch (Exception $e) {
        // Rollback the transaction if an error occurred
        $conn->rollback();
        echo json_encode(['success' => false, 'message' => 'An error occurred while placing your bid.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}

$conn->close();
?>