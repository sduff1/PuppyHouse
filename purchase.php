<?php

require('database.php');

class Purchase {

    public $itemid;//Item ID
    public $custom;//customer's custom image-optional
    public $quantity;//quantity the customer purchased
    public $payment;//payment method... format TBD
    public $saleid;//ID of sale



    public function __construct($itemid, $custom, $quantity, $payment, $saleid)
    {
        require ('database.php');
        $this->itemid=$itemid;
        $this->custom=$custom;
        $this->quantity=$quantity;
        $this->payment=$payment;
        $this->saleid=$saleid;
        $query = "INSERT INTO puppyhouse.sales(itemID, custom, quantity, payment, saleID) VALUES('$itemid', '$custom','$quantity','$payment', '$saleid')";
        mysqli_query($conn, $query);
    }

    /*public function getItemid($id)
    {
        $query = "SELECT itemID FROM puppyhouse.sales WHERE saleID = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setItemid($itemid, $id): void
    {
        $query = "UPDATE puppyhouse.sales Set itemID='$itemid'  WHERE saleid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getCustom($id)
    {
        $query = "SELECT custom FROM puppyhouse.sales WHERE saleid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setCustom($custom, $id): void
    {
        $query = "UPDATE puppyhouse.sales Set custom='$custom'  WHERE saleid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getQuantity($id)
    {
        $query = "SELECT quantity FROM puppyhouse.sales WHERE saleID = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setQuantity($quantity, $id): void
    {
        $query = "UPDATE puppyhouse.sales Set quantity='$quantity'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getPayment($id)
    {
        $query = "SELECT payment FROM puppyhouse.sales WHERE saleID = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setPayment($payment, $id): void
    {
        $query = "UPDATE puppyhouse.sales Set payment='$payment'  WHERE saleID = '$id'";
        mysqli_query($conn, $query);
    }*/



}