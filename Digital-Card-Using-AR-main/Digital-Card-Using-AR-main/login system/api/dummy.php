<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "test";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// to ensure that the connection is made
// if (!$con)
// {
//     die("Connection failed!" .mysqli_connect_error());
// }
// echo "connection sucessfull";
// error_reporting(0);
$query = "SELECT * FROM user";
$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

echo $result['name'];
// echo $result;
// echo "\n";
// echo $total ;

if($total != 0){
  echo "table has records";
}
else{
  echo "table has not records";
}
?>
