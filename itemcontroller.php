<?php
require('database.php');

function createItem($itemName,$description,$category,$color,$cost,$retailCost, $subprice, $id, $image)
{
    new Item($itemName,$description,$category,$color,$cost,$retailCost, $subprice, $id, $image);
}
function getItemName($id)
{
    require('database.php');
    $query = "SELECT name FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['name'];
}

function setItemName($itemName, $id): void
{
    $query = "UPDATE puppyhouse.item Set name='$itemName'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getDescription($id)
{
    require('database.php');
    $query = "SELECT description FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['description'];
}

function setDescription($description, $id): void
{
    $query = "UPDATE puppyhouse.item Set description='$description'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getCategory($id)
{
    require('database.php');
    $query = "SELECT category FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['category'];
}

function setCategory($category, $id): void
{
    $query = "UPDATE puppyhouse.item Set category='$category'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getColor($id)
{
    require('database.php');
    $query = "SELECT color FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['color'];
}

function setColor($color, $id): void
{
    $query = "UPDATE puppyhouse.item Set color='$color'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getCost($id)
{
    require('database.php');
    $query = "SELECT purchasecost FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['purchasecost'];
}

function setCost($cost, $id): void
{
    $query = "UPDATE puppyhouse.item Set purchasecost='$cost'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getRetailCost($id)
{
    require('database.php');
    $query = "SELECT fullretailprice FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['fullretailprice'];
}

function setRetailCost($retailCost, $id): void
{
    $query = "UPDATE puppyhouse.item Set fullretailprice='$retailCost'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}
function getSubscriberCost($id)
{
    require('database.php');
    $query = "SELECT subscriberprice FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['subscriberprice'];
}

function setSubscriberCost($subcost, $id): void
{
    $query = "UPDATE puppyhouse.item Set subscriberprice='$subcost'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}
function getImage($id)
{
    require('database.php');
    $query = "SELECT image FROM puppyhouse.item WHERE id = '$id'";
    $sqlquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sqlquery);
    return $result['image'];
}

function setImage($image, $id): void
{
    $query = "UPDATE puppyhouse.item Set image='$image'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}
