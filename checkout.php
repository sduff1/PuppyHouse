<?php

$cart = $_SESSION['cart'];
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
  <a id ="link" href="index.php">Home</a>
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
  </div>
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
      <h2 class="text-center" style="padding:0; font-weight:bold; width:100%; color:#222831; text-align: center;  margin: 1em 0 .6em 0; padding: 24px; ">Order Summary</h2>
      </nav>
      <br /><br /><br />
<br />
<!--Code from DB needs to go here to pull info from cart--->
<div class="row">
  <div class="col-md-6">
    <div class="container" id="checkout-page">
      <table>
      <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
      </tr>


          <?php for ($i = 0; $i < count($cart); $i++) {
              echo '<tr>';
              echo '<td>';
              echo '<div class="cart-info">';
              echo '<img src="<?php echo getImage($cart->getCartItems()[$i]->getID())?>" id="images">';
              echo '<div>';
              echo '<p><?php echo getItemName($cart->getCartItems()[$i]->getID())?></p>';
              echo '<small>Price: $<?php echo getRetailCost($cart->getCartItems()[$i]->getID())?></small>';
              echo '<br>';
              echo '<a href="">Remove</a>';
              echo '</div>';
              echo '</div>';
              echo '</td>';
              echo '<td><input type="number" value="1"></td>';
              echo '<td>$<?php echo getRetailCost($cart->getCartItems()[$i]->getID())?></td>';
              echo '</tr>';
          }?>
      </table>
    </div>
  </div>
</div>

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
<div class="row">
  <div class="col-md-3">
    <div class="container" id="customer-info">
      <!---This form needs to send customer email, address, and phone number to customer database--->
      <form action="#" method="post">
        <div class="form-group">
          <div class="col-xs-3">
            <label for="Name" id="Name-label">Name (First and Last):</label>
            <input type="text" class="form-control" id="Name" name="name" />
            <br />
            <label for="Email" id="Email-label">Email Address:</label>
            <input type="text" class="form-control" id="Email" name="Email" />
            <br />
            <label for="Street Address" id="address-label">Street Address:</label>
            <input type="text" class="form-control" id="Street Address" name="address" />
            <br />
            <label for="City" id="city-label">City:</label>
            <input type="text" class="form-control" id="City" name="city" />
            <br />
            <label for="state" id="state-label">State:</label>
            <input type="text" class="form-control" id="state" name="state" />
            <br />
            <label for="Zip" id="zip-label">Zipcode:</label>
            <input type="text" class="form-control" id="Zip" name="zip" />
            <br />
            <label for="phone" id="phone-label">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone" />
            <br />
            </form>
          </div>
        </div>
        </div>


    <div class="placeorder-btn">
      <div class="placeorder-cart">
        <!--Link to secure credit card portal-->
        <a href="#" class="btn btn-my-order" data-checkout="Order">
          <span class="fa fa-shopping-cart"></span>Place Order</a>
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
