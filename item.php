<?php

require('database.php');

class Item {

    public $itemName;//Item name
    public $description;//Item description
    public $category;//Item Category
    public $color;//color
    public $cost;//cost that WE pay to purchase the product for resale
    public $retailCost;//cost that the customer pays
    public $subprice;//Price for subscribers
    public $image;//Image of the Item
    public $id;//Item ID


    public function __construct($itemName,$description,$category,$color,$cost,$retailCost, $subprice, $id,string $image)
    {
        require('database.php');
        $this->itemName=$itemName;
        $this->description=$description;
        $this->category=$category;
        $this->color=$color;
        $this->cost=$cost;
        $this->retailCost=$retailCost;
        $this->subprice=$subprice;
        $this->id=$id;
        $this->image=$image;
        $query = "INSERT INTO item(name, description, category, color,purchasecost, fullretailprice, subscriberprice, id, image) VALUES('$itemName', '$description','$category','$color', '$cost','$retailCost', '$subprice', '$id', '$image')";
        mysqli_query($conn, $query);
    }






   /* public function getItemName($id)
    {
        $query = "SELECT name FROM item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setItemName($itemName, $id): void
    {
        $query = "UPDATE item Set name='$itemName'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getDescription($id)
    {
        $query = "SELECT description FROM item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setDescription($description, $id): void
    {
        $query = "UPDATE puppyhouse.item Set description='$description'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getCategory($id)
    {
        $query = "SELECT category FROM puppyhouse.item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setCategory($category, $id): void
    {
        $query = "UPDATE puppyhouse.item Set category='$category'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getColor($id)
    {
        $query = "SELECT color FROM puppyhouse.item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setColor($color, $id): void
    {
        $query = "UPDATE puppyhouse.item Set color='$color'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getCost($id)
    {
        $query = "SELECT purchasecost FROM puppyhouse.item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setCost($cost, $id): void
    {
        $query = "UPDATE puppyhouse.item Set purchasecost='$cost'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    public function getRetailCost($id)
    {
        $query = "SELECT fullretailprice FROM puppyhouse.item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setRetailCost($retailCost, $id): void
    {
        $query = "UPDATE puppyhouse.item Set fullretailprice='$retailCost'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    public function getImage($id)
    {
        $query = "SELECT image FROM puppyhouse.item WHERE id = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setImage($image, $id): void
    {
        $query = "UPDATE puppyhouse.item Set image='$image'  WHERE id = '$id'";
        mysqli_query($conn, $query);
    }*/




}