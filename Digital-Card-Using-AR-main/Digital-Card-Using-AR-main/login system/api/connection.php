<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "test";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}
echo "connection sucessfull";


?>
