<?php
//Need the connection to the server and database which is why it requires database.php
require ('database.php');

//Needs the item.php to create Item object
require ('Item.php');

/**
 * Method to get data in HTML form (addItemForm.php) is post
 * Fetches form data from addItemForm.php using $_POST
 *
 * Makes sure there are no duplicate Item Numbers being queried into the database
 */

//if submit has been clicked
if(isset($_POST['submit'])) {

    //Get form data using $_POST
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $cost = mysqli_real_escape_string($conn, $_POST['purchasecost']);
    $retailcost = mysqli_real_escape_string($conn, $_POST['retailcost']);
    $subcost = mysqli_real_escape_string($conn, $_POST['subcost']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);


    //Create Item object from data collected
    $product = new Item("$name", "$description", "$category", "$color", "$cost", "$retailcost", "$subcost","$id", "$image");


    /*//Getter methods to retrieve properties of the Object created
    $item_num = $product->getItemNumber();
    $item_desc= $product->getDescription();
    $item_cat = $product->getCategory();
    $item_dept= $product->getDepartment();
    $item_cost = $product->getCost();
    $item_rtl_cost= $product->getRetailCost();



    //Get the elements from item_number column from item table, that matches the number provided by the user in the Item Number field of addItemForm.php
    $check = mysqli_query($conn,"SELECT * from produce.item WHERE item_number='$item_num'");

    //Checks how many rows are in $check
    $checkRows=mysqli_num_rows($check);

    //if the number of rows is > 0 that means that there is at least an element in item_number column in the database that matches the number provided by user (THERE IS A DUPLICATE)
    //Will not allow query to be processed
    if ($checkRows>0){
        echo'<script>alert("Could not add Item! Item is already in system.")</script>';
    }else{
        //If there is no row, then it will process the query
        $query = "INSERT INTO produce.item(item_number, item_description, category, department_name,purchase_cost, full_retail_price) VALUES('$item_num', '$item_desc','$item_cat','$item_dept', '$item_cost','$item_rtl_cost')";
        echo '<script>alert("Item has been added!")</script>';
        if (!mysqli_query($conn, $query)){
            echo "Error: '.mysqli_error($conn)";
        }
    }*/

}
