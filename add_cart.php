<?php

global $cart;
$itemId = $_POST['itemId'];
$custId = $_POST['custId'];
$quan = $_POST['quantity'];

$cart->addCartItem(new cartItem($itemId, $custId, $quan));

include 'cartview.php';