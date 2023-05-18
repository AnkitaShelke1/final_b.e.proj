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

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $myusername= mysqli_real_escape_string($con, $_POST['name']);
  $myusername= mysqli_real_escape_string($con, $_POST['email']);
  $mypassword = mysqli_real_escape_string($con, $_POST['pass']);

  $sql = "SELECT id FROM user WHERE email = '$myusername' AND password = '$mypassword'";

  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


  // $userdata = mysqli_fetch_assoc($result);
  // $active = $row['active'];
  // $count = mysqli_num_rows($result);
  // $_SESSION['userdata'] = $userdata;


  $count = mysqli_num_rows($result);

    $_SESSION['result'] = $result;
    $_SESSION['row'] = $row;


    $query = "SELECT * FROM user";
    $data = mysqli_query($con, $query);

    $total = mysqli_num_rows($data);

    $result = mysqli_fetch_assoc($data);
    $user_name = $result['name'];
    if(isset($user_name)){
    $myusername= mysqli_real_escape_string($con, $_POST['email']);
    $user_name = $result['myusername'];
 }
  if($count == 1){


    $_SESSION['user_id'] = $user_name;
    header("location: ../User Dashboard/home.php");
  }

  else{
    echo"
    <script>
      alert('invalid Credentials!');
      window.location = '../login_form.html';
    </script>
    ";
    // $error = "your login name or password is invalid";
    // echo($error);
  }
}
echo"Invalid Credentials";
 ?>
