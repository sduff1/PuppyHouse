<?php

require('database.php');

class Purchase {

    public $itemid;//Item ID
    public $quantity;//quantity the customer purchased
    public $payment;//payment method... format TBD
    public $saleid;//ID of sale
    public $size;


    public function __construct($itemid, $quantity, $size, $saleid, $cardnum, $expdate, $sec, $cname)
    {
        require ('database.php');
        $this->itemid=$itemid;
        $this->quantity=$quantity;
        $this->saleid=$saleid;
        $this->size=$size;
        $query = "INSERT INTO sales(itemID, quantity, size, saleID, CreditCardNumber, ExpirationDate, SecurityCode, NameOnCard) VALUES('$itemid','$quantity','$size','$saleid', '$cardnum', '$expdate', '$sec', '$cname')";
        mysqli_query($conn, $query);
    }

    /*public function getItemid($id)
    {
        $query = "SELECT itemID FROM sales WHERE saleID = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setItemid($itemid, $id): void
    {
        $query = "UPDATE sales Set itemID='$itemid'  WHERE saleid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getQuantity($id)
    {
        $query = "SELECT quantity FROM sales WHERE saleID = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setQuantity($quantity, $id): void
    {
        $query = "UPDATE sales Set quantity='$quantity'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getPayment($id)
    {
        $query = "SELECT payment FROM sales WHERE saleID = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setPayment($payment, $id): void
    {
        $query = "UPDATE sales Set payment='$payment'  WHERE saleID = '$id'";
        mysqli_query($conn, $query);
    }*/



}