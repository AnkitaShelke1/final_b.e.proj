<?php
  session_start();
  $con = mysqli_connect('localhost:3307','root','','test') or die('Unable to connect');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">
      <img src = "images/pic-17.png"></a>

      <form action="../api/login.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <a href="../login_form.html"><div id="user-btn" class="fas fa-user"></div></a>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">shaikh anas</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="Your Card.html"><i class="fa fa-id-card" aria-hidden = "true"></i><span>Your Card</span></a>
      <a href="Block the Card.html"><i class="fa fa-ban" aria-hidden="true"></i><span>Block the Card</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>About</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
       <a href="file:///D:/myWebsite/login%20system/login_form.html"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log Out</span></a>
   </nav>

</div>

<section class="form-container">

   <form action="../api/login.php" method="POST" enctype="multipart/form-data">
      <h3>login now</h3>
      <!-- <p>your name <span>*</span></p> -->
      <!-- <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box"> -->
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password" required maxlength="20" class="box">
      <input type="submit" value="login new" name="submit" class="btn">
      <p style = "margin-top: 10px;font-size: 21px;color: #333;text-align:center;">Don't have an account? <a style ="color: #0a70d9;" href="../register_form.html">Register Now</a></p>
   </form>

</section>
  <?php
  if (!empty($_POST["email"]) && !empty($_POST["password"])){

    if (isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['pass'];


$select = mysqli_query($con, "SELECT * FROM user WHERE email ='$email' AND  password = '$password' ");
// $row = mysqli_fetch_array($select);

$data = mysqli_query($con, $select);
$total = mysqli_num_rows($data);
echo $total;
}
}


// if ($email && $password) {
//   // Set the username in the session
//   $_SESSION['email'] = $email;
// }
// if(is_array($row)){
//   $_SESSION["email"] = row['email'];
//   $_SESSION["password"] = row['password'];
// }else{
//   echo '<script type = "text/javascript">';
//   echo 'alert("Invalid Username or Password")';
//   echo 'window.location.href = "login.php" ';
//   echo '</script>';
// }
// }
// }
// if(isset($_SESSION["email"])){
//   header("Location:home.php");
// }
   ?>


</script>
</body>
</html>
