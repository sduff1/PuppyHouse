<?php
include_once 'cartItem.php';
include 'cart.php';
$cartItem = new cartItem("empty", 1, 1, "none");
$cartItems = array($cartItem);
$cart = new cart(1, $cartItems);
$_SESSION['cart'] = $cart;
