<?php
require 'cartControl.php';
$itemId = $_POST['itemId'];
$custId = $_POST['custId'];
$quan = $_POST['quantity'];
$size = $_POST['size'];
$cart = $_SESSION['cart'];
additem($cart, new cartItem($itemId, $custId, $quan, $size));
$_SESSION['cart'] = $cart;
header("Location: http://www.itss.brockport.edu/~sduff1/cis442/PuppyHouse/cartview.php");
exit();