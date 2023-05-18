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

session_start();

// if($_SERVER["REQUEST_METHOD"] == "POST"){

if(isset)
  $myusername= mysqli_real_escape_string($con, $_POST['email']);
  $mypassword = mysqli_real_escape_string($con, $_POST['pass']);

  // $sql = "SELECT id FROM user WHERE email = '$myusername' AND password = '$mypassword'";
  $sql = "SELECT * FROM user WHERE email = '$myusername' AND password = '$mypassword'";
  $result = mysqli_query($con, $sql);
  $userdata = mysqli_fetch_assoc($result);
  // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $active = $row['active'];
  $email_count = mysqli_num_rows($result);

  $db_pass = $email_pass['password'];
  $db_name = $email_pass['name'];

  $_SESSION['name'] = $db_name;

  $_SESSION['userdata'] = $userdata;
  $_SESSION['result'] = $result;
  $_SESSION['row'] = $row;
  $count = mysqli_num_rows($result);

  if($count == 1){
    // session_register("myusername");
    // $_SESSION[]
    $_SESSION['login_user'] = $myusername;

    header("location: ../User Dashboard/home.php");
  }

  else{
    echo"
    <script>
      alert('invalid Credentials!');
      window.location = '../User Dashboard/login.html';
    </script>
    ";
    $error = "your login name or password is invalid";
    echo($error);
  }
}
 ?>
