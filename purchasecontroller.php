<?php
require('database.php');

function createPurchase($itemid, $custom, $quantity, $payment, $saleid)
{
    new Purchase($itemid, $custom, $quantity, $payment, $saleid);
}
function getItemid($id)
{
    $query = "SELECT itemID FROM puppyhouse.sales WHERE saleID = '$id'";
    return mysqli_query($conn, $query);
}

function setItemid($itemid, $id): void
{
    $query = "UPDATE puppyhouse.sales Set itemID='$itemid'  WHERE saleid = '$id'";
    mysqli_query($conn, $query);
}

function getCustom($id)
{
    $query = "SELECT custom FROM puppyhouse.sales WHERE saleid = '$id'";
    return mysqli_query($conn, $query);
}

function setCustom($custom, $id): void
{
    $query = "UPDATE puppyhouse.sales Set custom='$custom'  WHERE saleid = '$id'";
    mysqli_query($conn, $query);
}

function getQuantity($id)
{
    $query = "SELECT quantity FROM puppyhouse.sales WHERE saleID = '$id'";
    return mysqli_query($conn, $query);
}

function setQuantity($quantity, $id): void
{
    $query = "UPDATE puppyhouse.sales Set quantity='$quantity'  WHERE saleid = '$id'";
    mysqli_query($conn, $query);
}

function getPayment($id)
{
    $query = "SELECT payment FROM puppyhouse.sales WHERE saleID = '$id'";
    return mysqli_query($conn, $query);
}

function setPayment($payment, $id): void
{
    $query = "UPDATE puppyhouse.sales Set payment='$payment'  WHERE saleID = '$id'";
    mysqli_query($conn, $query);
}
