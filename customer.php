<?php

require('database.php');

class Customer
{
    public $firstName;
    public $lastName;
    public $username;
    public $password;
    public $customerId;
    public $secQuestion;//security question
    public $secAnswer;//answer
    public function __construct($firstName, $lastName, $username, $password, $customerId, $secQuestion, $secAnswer)
    {
        require ('database.php');
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->password = $password;
        $this->customerId = $customerId;
        $this->secQuestion = $secQuestion;
        $this->secAnswer = $secAnswer;
        $query = "INSERT INTO customer(firstname, lastname, username, password, customerid, securityquestion, securityanswer) VALUES('$firstName', '$lastName','$username','$password', '$customerId','$secQuestion', '$secAnswer')";
        mysqli_query($conn, $query);
    }


    /*public function getFirstName($id)
    {
        $query = "SELECT firstname FROM puppyhouse.customer WHERE customerid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setFirstName($firstName, $id): void
    {
        $query = "UPDATE puppyhouse.customer Set firstname='$firstName'  WHERE customerid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getLastName($id)
    {
        $query = "SELECT lastname FROM puppyhouse.customer WHERE customerid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setLastName($lastName, $id): void
    {
        $query = "UPDATE puppyhouse.customer Set lastname='$lastName'  WHERE customerid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getUsername($id)
    {
        $query = "SELECT username FROM puppyhouse.customer WHERE customerid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setUsername($username, $id): void
    {
        $query = "UPDATE puppyhouse.customer Set username='$username'  WHERE customerid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getPassword($id)
    {
        $query = "SELECT password FROM puppyhouse.customer WHERE customerid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setPassword($password, $id): void
    {
        $query = "UPDATE puppyhouse.customer Set password='$password'  WHERE customerid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getSecurityQuestion($id)
    {
        $query = "SELECT securityquestion FROM puppyhouse.customer WHERE customerid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setSecurityQuestion($securityquestion, $id): void
    {
        $query = "UPDATE puppyhouse.customer Set securityquestion='$securityquestion'  WHERE customerid = '$id'";
        mysqli_query($conn, $query);
    }

    public function getSecurityAnswer($id)
    {
        $query = "SELECT securityanswer FROM puppyhouse.customer WHERE customerid = '$id'";
        return mysqli_query($conn, $query);
    }

    public function setSecurityAnswer($securityanswer, $id): void
    {
        $query = "UPDATE puppyhouse.customer Set securityanswer='$securityanswer'  WHERE customerid = '$id'";
        mysqli_query($conn, $query);
    }*/














}



