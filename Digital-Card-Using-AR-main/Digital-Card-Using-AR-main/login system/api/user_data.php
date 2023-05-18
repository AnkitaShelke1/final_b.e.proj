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
    die("Connection failed!" .mysqli_connect_error());
}
echo "connection sucessfull";





  $name =      $_POST["name"];
  $email =     $_POST["email"];
  $course_name =  $_POST["course_name"];
  $mobile_no = $_POST["mobile_no"];
  $college =  $_POST["college"];
  $seat_no =  $_POST["seat_no"];
  $instagram =  $_POST["instagram"];
  $whatsapp = $_POST["whatsapp"];
  $github =  $_POST["github"];
  $linkedin =  $_POST["linkedin"];

  $filename =  $_FILES["image"]["name"];
  $tempname =  $_FILES["image"]["tmp_name"];
  $folder = "images/".$filename;
  move_uploaded_file($tempname, $folder);

  $filename_two = $_FILES["documents"]["name"];
  $tempname_two = $_FILES["documents"]["tmp_name"];
  $folder_two = "document/".$filename_two;
  move_uploaded_file($tempname_two, $folder_two);

  $insert = mysqli_query($con, "INSERT INTO user_data(name, email, course_name, mobile_no, college, seat_no, instagram, whatsapp, github, linkedin, photo, documents)
    VALUES ('$name', '$email', '$course_name','$mobile_no', '$college', '$seat_no', 'instagram', '$whatsapp' ,'$github', '$linkedin', '$folder', '$folder_two')");
    if($insert){
      echo"
      <script>
          alert('data stored successfully!!');
          window.location ='../User Dashboard/home.php';
      </script>
      ";
    }
    else{
       echo"
       <script>
         alert('Some error occured');
         window.location = '../User Dashboard/resgiter.html';
       </script>
       ";
    }


 ?>
