<?php
include 'cartcreate.php';
global $cart;
?>
<!DOCTYPE html>
<html>
<head>
  <title>PuppyHouse</title>
  <!--applies style sheet found in css folder-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--applies main style sheet-->
  <link rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
<h1 id="logo"><img src="./images/logo.png" alt="logo" /> Welcome to PuppyHouse</a></h1>
</div>
  <!--affixes nav bar to top of the page-->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <!--Drop down menu-->
  <div class="navbar">
  <a id ="link" href="#home">Home</a>
  <a  id ="link"  href="#aboutus">About us</a>
  <a  id ="link"  href="#blog">Blog</a>
  <a  id ="link"  href="#Contactus">Contact Us</a>
  <nav class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text-1">For Puppies<span class="caret"></span></a>
      <div class="dropdown-menu" role="menu" id="text-2">
      <!--Need to add links to the products on amazon later-->
        <a href="#">Clothing</a>
        <a href="#">Accessories</a>
        <a href="#">Kitchenware</a>
      </div>
    </nav>
    <nav class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text-1">For Owners<span class="caret"></span></a>
      <div class="dropdown-menu" role="menu" id="text-2">
      <!--Need to add links to the products on amazon later-->
        <a href="#">Clothing</a>
        <a href="#">Accessories</a>
        <a href="#">Kitchenware</a>
      </div>
    </nav>
  </nav>

<nav class = "searchbutton"  style="background:#222831; background-size: contain;" >
<br>
  <form class="search" action="/action_page.php" style="margin:auto;max-width:500px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <br>
</nav>
<nav style ="background:#393e46">
<div id = "advertising">
<img src="./images/puppy_house_adversiting_1.png" alt="Nature" class="responsive">
<hr style="height:2px;border-width:2px;color:#393e46;background-color:#CECECE">
</div>
</nav>
<!--Insert images to be used on webpage-->
    <!--Create cataloge/featured images uses pre-defined bootstrap grid-->
      <nav >
      <h2 class="text-center" style="padding:0; font-weight:bold; width:100%; color:#222831; text-align: center;  margin: 1em 0 .6em 0; padding: 24px; ">Shopping Cart</h2>
      </nav>
      <br /><br /><br />
<br />
<!--Shopping Cart item details which should populate with database. only here for display purposes--->
<!--Need to fix css so it goes across the whole page-->

<div class="col-md-12">
  <div class="container" id="cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>


        <?php

                for ($i = 0; $i < $cart->getCount(); $i++) {
                    global $cart;
                    echo <<<HTML
                        <tr>
                    <td>
                    <div class="cart-info">
                    <img src="<?php echo getImage($cart->getCartItems()[$i]->getID())?>" id="images">
                    <div>
                    <p><?php echo getItemName($cart->getCartItems()[$i]->getID())?></p>
                    <small>Price: $<?php echo getRetailCost($cart->getCartItems()[$i]->getID())?></small>
                    <br>
                    <a href="">Remove</a>
                    </div>
                    </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$<?php echo getRetailCost($cart->getCartItems()[$i]->getID())?></td>
                    </tr>
                
                
                HTML;
                }
         ?>
    </table>
    <!--Need database and formulas to calculate totals this is just a mock up-->
    <!--Functions will need to add up the totals based off items chosen-->
    <hr />
    <div class="total-price">
        <table>
          <tr>
              <td>Subtotal</td>
              <td>$<?php $price = 0;
                    for ($i = 0; $i < count($cart->getCartItems()); $i++){
                  $price = $price + $cart->getCartItems()[$i]->getPrice();
                  } echo $price;?>
              </td>
          </tr>
          <tr>
              <td>Tax</td>
              <td>$<?php $tax = $price * .07;
                        echo $tax;?></td>
          </tr>
          <tr>
              <td>Total</td>
              <td>$<?php echo $tax + $price;?></td>
          </tr>
        </table>
    </div>
    <hr />
    <div class="checkout-btn">
      <div class="cheackout-cart">
        <a href="checkout.php" class="btn btn-my-checkout" data-checkout="Checkout">
          <span class="fa fa-shopping-cart"></span>Checkout</a>
      </div>
  </div>
</div>


<!--Insert footer-->
<div style="background-color: #fd7014;">
<footer class="text-center" id="footer">&copy; Copyright 2020 PuppyHouse. All rights Reserved.
<p style="font-size: 1em;">Privacy Policy</p>
</footer>
</div>
</body>
</html>