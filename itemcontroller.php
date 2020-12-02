<?php
require('database.php');

function createItem($itemName,$description,$category,$color,$cost,$retailCost, $id, $image)
{
    new Item($itemName,$description,$category,$color,$cost,$retailCost, $id, $image);
}
function getItemName($id)
{
    $query = "SELECT name FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setItemName($itemName, $id): void
{
    $query = "UPDATE puppyhouse.item Set name='$itemName'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getDescription($id)
{
    $query = "SELECT description FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setDescription($description, $id): void
{
    $query = "UPDATE puppyhouse.item Set description='$description'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getCategory($id)
{
    $query = "SELECT category FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setCategory($category, $id): void
{
    $query = "UPDATE puppyhouse.item Set category='$category'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getColor($id)
{
    $query = "SELECT color FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setColor($color, $id): void
{
    $query = "UPDATE puppyhouse.item Set color='$color'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getCost($id)
{
    $query = "SELECT purchasecost FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setCost($cost, $id): void
{
    $query = "UPDATE puppyhouse.item Set purchasecost='$cost'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}

function getRetailCost($id)
{
    $query = "SELECT fullretailprice FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setRetailCost($retailCost, $id): void
{
    $query = "UPDATE puppyhouse.item Set fullretailprice='$retailCost'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}
function getImage($id)
{
    $query = "SELECT image FROM puppyhouse.item WHERE id = '$id'";
    return mysqli_query($conn, $query);
}

function setImage($image, $id): void
{
    $query = "UPDATE puppyhouse.item Set image='$image'  WHERE id = '$id'";
    mysqli_query($conn, $query);
}
