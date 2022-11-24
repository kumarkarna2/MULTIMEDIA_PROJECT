<?php
session_start();
if(isset($_SESSION['username']))
    header('location : home.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Gaming Hub</title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet">
  <!--Main style css-->
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sections.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
    <nav class="header">
        <div class="left">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="mid">
            <ul class="navbar">
                <li><a href="index.html" class="active">HOME</a></li>
                <li><a href="https://rog.asus.com/articles/" target = "_blank">ABOUT</a></li>
                <li><a href="https://www.apunkagames.biz/" target="_blank">GAMES</a></li>
                <li><a href="https://rog.asus.com/articles/news/" target="_blank">NEWS</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
        </div>
        <div class="right">
            <div><a href="signup.php" class="link_btn">SIGN UP</a></div>
        </div>
    </nav>

<?php
    require('connection_check.php');
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `loginx` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
       
       
        if ($rows == 1) {
            $_SESSION['username'] = $username;
         
        // Welcome message
        $_SESSION['success'] = "You have logged in";
            header("Location:home.php");
        } else {
            echo "<div class='container'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

  <div class="container">
    <h1>Log in</h1>
    <form action="" method = "post" class="form">
        <div class="form-group">
            <input type="text" name="username" id="" placeholder="User name">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" placeholder= "Password">
        </div><br>
        <input class="link_btn" type="submit" value="Login">
    </form>
  </div>

<?php
    }
?>

<div class="section1">
        <div class="container-left1">
            <p>We collected 16 of the best free online gta games.
                These games include browser games for both your computer and mobile devices,
                as well as apps for your Android and iOS phones and tablets.
                They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.</p>
        </div>
        <div class="container-right1">
            <img src="images/2.jpg" alt="">
        </div>
    </div>

    <div class="section2">
        <div class="container-right2">
            <img src="images/3.jpg" alt="">
        </div>
        <div class="container-left2">
            <p>The Netherrealm studio created one of the most popular games
                 in the world, Mortal Kombat. There are huge, high-quality 
                 shots from the games, which have made this website bright 
                 and impressive. The main emphasis on this website is on the 
                 game itself rather than on corporate info. We collected 16 of the best free online gta games.
                 These games include browser games for both your computer and mobile devices,
                 as well as apps for your Android and iOS phones and tablets.
                 They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                 Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.
            </p>
        </div>
    </div>

    <div class="section3">
        <div class="container-left3">
            <p>We collected 16 of the best free online gta games.
                These games include browser games for both your computer and mobile devices,
                as well as apps for your Android and iOS phones and tablets.
                They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.
                We collected 16 of the best free online gta games.
                These games include browser games for both your computer and mobile devices,
                as well as apps for your Android and iOS phones and tablets.
                They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.
            </p>
        </div>
        
        <div class="container-right3">
            <img src="images/4.jpg" alt="">
        </div>
    </div>

<footer>
        <div>
            <p>Reach us</p>
        </div>
        <div class="footer_div1">
            <ul>
                <li>
                    <a href="https://www.facebook.com/ASUSROGInd/"><img src="images/fb.png" alt=""></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/asusrog.in/?hl=en" target="_blank"><img src="images/insta.png" alt=""></a>
                </li>
                <li>
                    <a href="https://twitter.com/asus_rog_in?lang=en"><img src="images/twitter.png" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="footer_div2">
            <p>Terms and conditions apply</p>
        </div>
        <div class="footer_div3">
            <a href="https://rog.asus.com/in/" target="_blank">rog.asus.com</a>
        </div>
    </footer>

</body>
</html>
