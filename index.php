<?php
// Error_log to show in web server log, but not in browser.

$prices = array(5.95, 3.00, 12.50);
$totalPrice = 0;
$tax_rate = 1.08; // tax of 8%

foreach ($prices as $price) {
    error_log("before: $totalPrice");
    $totalPrice = $price * $tax_rate;
    error_log("after: $totalPrice");
}

printf('Total price (with tax): $%.2f', $totalPrice);
?>