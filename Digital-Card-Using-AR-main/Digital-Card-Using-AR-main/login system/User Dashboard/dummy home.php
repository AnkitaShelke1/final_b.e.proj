<?php
    session_start();
?>

    if(!isset($_SESSION['result']))
    {
      header("location: ../");
    }

    $result = $_SESSION['result'];

    $myusername = $_SESSION['name'];
    if($myusername == true){

    }
    else{
      header('location: ../api/login.php');
    }

    echo" <h2>Welcome </h2>".$_SESSION['name'];
    echo"<br";
 ?>

<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

   <section class="flex">

      <a href="home.html" class="logo">
      <img src = "images/pic-17.png"></a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
          <a href="login.html"><div id="user-btn" class="fas fa-user"></div></a>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

     <?php
     $host = "localhost:3307";
     $username = "root";
     $password = "";
     $dbname = "test";

     // creating a connection
     $con = mysqli_connect($host, $username, $password, $dbname);

     $sel = 'SELECT * FROM user';
     $query = mysqli_query($con, $sel);
     $result = mysqli_fetch_assoc($query);
     ?>
      <div class="profile">
         <img src="images/pic-2.jpg" class="image" alt="">
         <h3 class="name"><?php echo $result['email']; ?></h3>
         <p class="role">student</p>
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
      <img src="images/pic-2.jpg" class="image" alt="">
      <h3 class="name"><?php echo $result['email']; ?></h3>
      <p class="role"></p>
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

<section class="home-grid">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

   <div class="box">
         <h3 class="title">Digital Cards</h3>
         <p class="tutor">We believe in Augmented Reality technology,
         as a new communication medium, that can help people see reality in new,
         exciting ways.</p>
        <center><img src="images/pic-15.png" class="image" alt="centered image">
        </center>
      </div>


      <div class="box">
         <h3 class="title"> Digital Cards</h3>
         <p class="likes">Student ID Cards <span></span></p>
         <a href="studentIDCards.html" class="inline-btn">view </a>
         <p class="likes">Teacher ID Cards <span></span></p>
         <a href="teacherIDCards.html" class="inline-btn">view </a>
         <p class="likes">Business Cards <span></span></p>
         <a href="businessIDCards.html" class="inline-btn">view </a>
      </div>

 <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Creating a Card</h3>
         <p class="tutor">If you want to make a card then, fill the details: </p>
         <a href="register.html" class="inline-btn">get started</a>
      </div>

   </div>

</section>



<section class="courses">

   <h1 class="heading">Trending New Digital Cards Designs</h1>

   <div class="box-container">

         <IMG SRC = "images/pic-21.png" alt="">
          <IMG SRC = "images/pic-29.png" alt="">
         <IMG SRC = "images/pic-23.png" alt="">
         <IMG SRC = "images/pic-31.png" alt="">
          <IMG SRC = "images/pic-25.png" alt="">
          <IMG SRC = "images/pic-30.png" alt="">
         <IMG SRC = "images/pic-27.png" alt="">
         <IMG SRC = "images/pic-28.png" alt="">
         <IMG SRC = "images/pic-22.png" alt="">
          <IMG SRC = "images/pic-26.png" alt="">
         <IMG SRC = "images/pic-24.png" alt="">
         <IMG SRC = "images/pic-32.png" alt="">

   </div>



</section>

</body>
</html>
