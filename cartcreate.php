<?php
include 'cart.php';
include 'cartItem.php';
global $cart;
$cartItem = new cartItem("OS001", 1, 1);
$cartItems = array($cartItem);
$cart = new cart(1, $cartItems);
