<?php
require 'itemcontroller.php';
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

</div>
</div >
<nav class = "searchbutton"  style="background:#222831; background-size: contain;" >
<br>
  <form class="search" action="/action_page.php" style="margin:auto;max-width:500px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <br>
	</div>
</div>
</div>
</nav>
<nav style ="background:#393e46">
<div id = "advertising">
<img src="./images/puppy_house_adversiting_1.png" alt="Nature" class="responsive">
<hr style="height:2px;border-width:2px;color:#393e46;background-color:#CECECE">
<div>
</nav>
<!--Insert images to be used on webpage-->
    <!--Create cataloge/featured images uses pre-defined bootstrap grid-->
      <nav >
      <h2 class="text-center" style="padding:0; font-weight:bold; width:100%; color:#222831; text-align: center;  margin: 1em 0 .6em 0; padding: 24px; ">CUSTOMER FAVORITES</h2>
      </nav>
      <br /><br /><br />
      <div class= "row">
        <div class="col-md-3">
          <h4>Present Outfit</h4>
          <img src="images/present.png" alt="Present Outfit" id="images"/>
          <p class="list-price text-danger">List Price: <s>$19.99</s></p>
          <p class="price">Subscriber Price: $14.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
        </div>
        <!--Ms. Clause Outfit-->
          <div class="col-md-3">
          <h4>Ms. Clause Outfit</h4>
          <img src="images/msclause.png" alt="Ms. Clause" id="images"/>
          <p class="list-price text-danger">List Price: <s>$19.99</s></p>
          <p class="price">Subscriber Price: $14.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
        </div>
        <!--Reindeer Outfit featured product-->
          <div class="col-md-3">
              <h4><?php echo getItemName("PO003")?></h4>
              <img src="<?php echo getImage("PO003")?>" alt="Reindeer Outfit" id="images"/>
              <!--use <s></s> to put slash over price to show subscriber pricing-->
              <p class="list-price text-danger">List Price: <s>$<?php echo getRetailCost("PO003") ?></s></p>
              <p class="price">Subscriber Price: $<?php echo getSubscriberCost("PO003") ?></p>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
          </div>
        <!--Dog Pillow featured product-->
        <div class="col-md-3">
          <h4>Customizable Pillow</h4>
          <img src="images/dogpillow.png" alt="Customizable Pillow" id="images"/>
          <!--use <s></s> to put slash over price to show subscriber pricing-->
          <p class="list-price text-danger">List Price: <s>$9.99</s></p>
          <p class="price">Subscriber Price: $4.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>

        </div>
        <!--Sweatshirt featured product-->
        <div class="col-md-3" >
          <h4>Uni-sex Sweatshirt</h4>
          <img src="images/human_sweatshirt.jpg" alt="Uni-sex Sweatshirt" id="images"/>
          <!--use <s></s> to put slash over price to show subscriber pricing-->
          <p class="list-price text-danger">List Price: <s>$19.99</s></p>
          <p class="price">Subscriber Price: $14.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>

        </div>
        <!--Shirt featured product-->
        <div class="col-md-3">
          <h4>Uni-sex Shirt</h4>
          <img src="images/human_shirt.jpg" alt="Uni-sex Shirt" id="images"/>
          <!--use <s></s> to put slash over price to show subscriber pricing-->
          <p class="list-price text-danger">List Price: <s>$14.99</s></p>
          <p class="price">Subscriber Price: $9.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>

        </div>

        <div class="col-md-3">
          <h4><?php echo getItemName("OA002W")?></h4>
          <img src="<?php echo getImage("OA002W")?>" alt="Customizable Coffee Cup" id="images"/>
          <!--use <s></s> to put slash over price to show subscriber pricing-->
          <p class="list-price text-danger">List Price: <s>$<?php echo getRetailCost("OA002W") ?></s></p>
          <p class="price">Subscriber Price: $<?php echo getSubscriberCost("OA002W") ?></p>
                <input type="hidden" name="id" value="OA002W">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>

        </div>

        <div class="col-md-3">
          <h4>Dog Sweatshirt</h4>
          <img src="images/dog-sweatshirt.jpg" alt="Dog Sweatshirt" id="images"/>
          <!--use <s></s> to put slash over price to show subscriber pricing-->
          <p class="list-price text-danger">List Price: <s>$24.99</s></p>
          <p class="price">Subscriber Price: $19.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
        </div>
</div>
<br>
<section style="background:#222831;">
<nav>
  <h2 id="sectiontitle" style=" text-align: center; width:100%; color:#ffffff; ">LATEST BLOGPOSTS</h2>
  </nav>
  <nav class="col-md-12" style="background:#e1c5a6; padding: 5px;">
  <br>
        <span>
          <h1>The perfect guide to Fall and Winter dog clothing</h1>
        
          <h5>October 21, 2016 By Maressa Loman</h5>
        
          <p style="text-align: left;">For many dogs, clothing is a necessary and essential part of staying warm during the colder months. Some dogs are unable to maintain the body heat necessary to keep warm and may require additional protection in fall and winter. While fur can be insulating, not all fur (or dogs) are created equal. If you’re unsure whether or not your dog needs additional layering, look at their behavior. Two common signs your dog needs clothing include shivering and a reluctance to go outdoors.
          Overwhelmed by all the choices? Jeffers Pet is here to help. From measuring for size to breaking down key features, this all-inclusive guide will help you select the best dog clothing for your canine companion.
          </p>
        </span>
        <div>
          <button onclick="#" class="ReadmoreBtn" id="ReadmoreBtn">Read more</button>
          <div>
          <br>
          <br>
      </nav>
  </section>
<!--Insert footer-->
<div style="background-color: #fd7014;">
<footer class="text-center" id="footer">&copy; Copyright 2020 PuppyHouse. All rights Reserved.
<p style="font-size: 1em;">Privacy Policy<p>
</footer>
</div>
<!--Detail Popouts for products-->
<?php include 'details-modal-present.php';
      include 'details-modal-msclause.php';
      include 'details-modal-reindeerbrown.php';
      include 'details-modal-dogpillow.php';
      include 'details-modal-coffeecup.php';
      include 'details-modal-dog-sweatshirt.php';
      include 'details-modal-human_sweatshirt.php';
      include 'details-modal-human_shirt.php';
      include 'item.php';
      include 'database.php';
    require'database.php';

?>

</body>
</html>
