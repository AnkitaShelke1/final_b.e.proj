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

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $myusername= mysqli_real_escape_string($con, $_POST['email']);
  $mypassword = mysqli_real_escape_string($con, $_POST['pass']);

  $sql = "SELECT id FROM user WHERE email = '$myusername' AND password = '$mypassword'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $active = $row['active'];
 $_SESSION['result'] = $result;
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
      window.location = '../login_form.html';
    </script>
    ";
    $error = "your login name or password is invalid";
    echo($error);
  }
}
 ?>
