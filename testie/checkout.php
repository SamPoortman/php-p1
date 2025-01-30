<?php
header('Content-Type: application/json');

$data = file_get_contents('php://input');
$cart = json_decode($data, true);

if (empty($cart)) {
    echo json_encode(['message' => 'No items in cart to checkout.']);
    exit;
}

$total = 0;
foreach ($cart as $item) {
    $total += $item['price'];
}

$message = "Thank you for your purchase! Your total is $" . number_format($total, 2);
echo json_encode(['message' => $message]);