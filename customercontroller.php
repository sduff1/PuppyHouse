<?php
require('database.php');

function createCustomer($firstName, $lastName, $username, $password, $customerId, $secQuestion, $secAnswer)
{
    new Customer($firstName, $lastName, $username, $password, $customerId, $secQuestion, $secAnswer);
}
function getFirstName($id)
{
    $query = "SELECT firstname FROM puppyhouse.customer WHERE customerid = '$id'";
    return mysqli_query($conn, $query);
}

function setFirstName($firstName, $id): void
{
    $query = "UPDATE puppyhouse.customer Set firstname='$firstName'  WHERE customerid = '$id'";
    mysqli_query($conn, $query);
}

function getLastName($id)
{
    $query = "SELECT lastname FROM puppyhouse.customer WHERE customerid = '$id'";
    return mysqli_query($conn, $query);
}

function setLastName($lastName, $id): void
{
    $query = "UPDATE puppyhouse.customer Set lastname='$lastName'  WHERE customerid = '$id'";
    mysqli_query($conn, $query);
}

function getUsername($id)
{
    $query = "SELECT username FROM puppyhouse.customer WHERE customerid = '$id'";
    return mysqli_query($conn, $query);
}

function setUsername($username, $id): void
{
    $query = "UPDATE puppyhouse.customer Set username='$username'  WHERE customerid = '$id'";
    mysqli_query($conn, $query);
}

function getPassword($id)
{
    $query = "SELECT password FROM puppyhouse.customer WHERE customerid = '$id'";
    return mysqli_query($conn, $query);
}

function setPassword($password, $id): void
{
    $query = "UPDATE puppyhouse.customer Set password='$password'  WHERE customerid = '$id'";
    mysqli_query($conn, $query);
}

function getSecurityQuestion($id)
{
    $query = "SELECT securityquestion FROM puppyhouse.customer WHERE customerid = '$id'";
    return mysqli_query($conn, $query);
}

function setSecurityQuestion($securityquestion, $id): void
{
    $query = "UPDATE puppyhouse.customer Set securityquestion='$securityquestion'  WHERE customerid = '$id'";
    mysqli_query($conn, $query);
}

function getSecurityAnswer($id)
{
    $query = "SELECT securityanswer FROM puppyhouse.customer WHERE customerid = '$id'";
    return mysqli_query($conn, $query);
}

function setSecurityAnswer($securityanswer, $id): void
{
    $query = "UPDATE puppyhouse.customer Set securityanswer='$securityanswer'  WHERE customerid = '$id'";
    mysqli_query($conn, $query);
}
