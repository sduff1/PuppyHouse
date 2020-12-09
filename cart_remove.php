<?php
include 'cartControl.php';

$num = $_GET['id'];

removeitem($_SESSION['cart'], $num);
header("Location: http://www.itss.brockport.edu/~sduff1/cis442/PuppyHouse/cartview.php");
exit();