<?php
require('database.php');
require('addItem.php');

/**
 *HTML file to accept user form data
 */
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add an Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class ="container">

    <div class="form-group">

        <h1>Add an Item</h1>

        <form method="POST" action="addItemForm.php">

            <label>Item Name</label>
            <input type = "text" name="name" class="form-control">

            <label>Item Description</label>
            <input type = "text" name="description" class="form-control">

            <label>Item Category</label>
            <input type = "text" name="category" class="form-control">

            <label>Item Color</label>
            <input type = "text" name="color" class="form-control">

            <label>Item Purchase Cost</label>
            <input type = "text" name="purchasecost" class="form-control">

            <label>Item Full Retail Cost</label>
            <input type = "text" name="retailcost" class="form-control">

            <label>Item ID</label>
            <input type = "text" name="id" class="form-control">

            <label>Item Image</label>
            <input type = "text" name="image" class="form-control">



            <p></p>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>
    </div>
</div>

</body>
</html>