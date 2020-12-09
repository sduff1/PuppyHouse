<?php

/**
 * Creates the connection between Server and database
 *
 * To use this connection: create a database named produce on PHPMyAdmin
 * To use this connection: set your password to 123456
 */

$DB_HOST = 'csdb.brockport.edu';
$DB_USER = 'sduff1';
$DB_PASS = '_fal20_0';
$DB_NAME = 'fal20_cis442_sduff1';
//Create Connection

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

//Verify connection
if (mysqli_connect_errno()){
    echo 'Connection to DataBase was not made';
}
