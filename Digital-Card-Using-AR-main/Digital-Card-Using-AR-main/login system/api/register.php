<?php

  // $connect = mysqli_connect("localhost","host","","test") or die("connection failed!!");
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

  $user_type =  $_POST["user_type"];
  $name =      $_POST["name"];
  $email =     $_POST["email"];
  $password =  $_POST["password"];
  $cpassword = $_POST["cpassword"];

  if($password == $cpassword){
    $insert = mysqli_query($con, "INSERT INTO user(user_type, name, email, password) VALUES ('$user_type', '$name', '$email', '$password')");
    if($insert){
      echo"
      <script>
          alert('Registration Succesfull!!');
          window.location ='../login_form.html';
      </script>
      ";
    }
    else{
       echo"
       <script>
         alert('Some error occured');
         window.location = '../register_form.html';
       </script>
       ";
    }
  }
  else{
    echo"
       <script>
        alert('password and confirm password does not match!');
        window.location = '../register_form.html';
        </script>
    ";
  }
 ?>
