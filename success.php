<?php
session_start();
if (isset($_SESSION['order_id'])) {
    echo "<h2>Thank you for your order!</h2>";
    echo "<p>Your Order ID is: <strong>" . $_SESSION['order_id'] . "</strong></p>";
    // unset session if you want to clear it after display
    // unset($_SESSION['order_id']);
} else {
    echo "No order found.";
}
?>