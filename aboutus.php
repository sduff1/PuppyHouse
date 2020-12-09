<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
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
        <a  id ="link"  href="aboutus.php">About us</a>
        <a  id ="link"  href="blog.php">Blog</a>
        <a  id ="link"  href="contactus.php">Contact Us</a>
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
    </div>
    <div>
        <a href="cart.php" class="btn-my-cart" data-checkout="Checkout">
            <span class="fa fa-shopping-cart"></span> My Cart</a>
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
        <img src="./images/advertising banner 2.jpg" alt="Nature" class="responsive">
        <hr style="height:2px;border-width:2px;color:#393e46;background-color:#CECECE">
    </div>
</nav>
<!--Insert pdf file for privacy statement !-->
<article>
    <h1 style=" text-align: center; width:100%; color:#222831;">PuppyHouse is a shooping place for puppies's lover<h1>
            <div style="font-weight: normal; font-size:medium; padding: 20px; display: block;">
                <p>PuppyHouse is online e-commerce website that retails and allows puppy and dog owners to personalize clothes and purchase the accessories with images of their favorite furry friends. PuppyHouse will provide the high-quality exclusive products through our online store.  Customers will easily get what they want in our online store for their puppies and dogs in the most convenient way
                </p>
                <p> We offer wide variety of quality products and options for customers to customize with images of their own through an easy to user-guide and customizable online platform. Our customers a quick and easy way to showcase their love for their favorite furry family members.
                </p>
                <p>
                    PuppyHouse aims to develop a strong base of customers and be the top-of-mind favorite online store and services for the puppy and dogs' owners.
                </p>
                <div>
</article>
<section >
    <h1 style=" text-align: center; width:100%; color:#222831;"> Our inspired story!</h1>
    <center><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-yTz3IasQeQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
</section>

<!--Insert footer-->
<div style="background-color: #fd7014;">
    <footer class="text-center" id="footer">&copy; Copyright 2020 PuppyHouse. All rights Reserved.
        <br>
        <a href="Privacy_Statement.php" style="font-size: 1em; color: white; " >Privacy Policy</a>
    </footer>
</div>
</body>
</html>
