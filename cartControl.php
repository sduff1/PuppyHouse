<?php
include 'cart.php';
include 'cartItem.php';
session_start();

function exists()
{
    if($_SESSION['cart'] == '')
    {
        return false;
    }
    else
    {
        return true;
    }
}
function createCart(){
    $cartItem = new cartItem("empty", 1, 1, "none");
    $cartItems = array($cartItem);
    $cart = new cart(1, $cartItems);
    $_SESSION['cart'] = $cart;
}
function additem($cart, $cartItem)
{
    $cart->addCartItem($cartItem);
    $_SESSION['cart'] = $cart;
}
function removeitem($cart, $cartItem)
{
    $cart->removeItem($cartItem);
    $_SESSION['cart'] = $cart;
}
function emptycart()
{
    createCart();
}
