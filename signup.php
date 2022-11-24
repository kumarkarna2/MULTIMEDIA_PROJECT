<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sections.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


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
            <div><a href="login.php" class="link_btn">LOG IN</a></div>
        </div>
    </nav>
<?php
  require('connection_check.php');
      // When form submitted, insert values into the database.
      if (isset($_REQUEST['username'])) {
          // removes backslashes
          $username = stripslashes($_REQUEST['username']);
          //escapes special characters in a string
          $username = mysqli_real_escape_string($con, $username);

          $age = stripslashes($_REQUEST['age']);
          $age = mysqli_real_escape_string($con, $age);

          $location = stripslashes($_REQUEST['location']);
          $location = mysqli_real_escape_string($con, $location);

          $email    = stripslashes($_REQUEST['email']);
          $email    = mysqli_real_escape_string($con, $email);

          $phone    = stripslashes($_REQUEST['phone']);
          $phone    = mysqli_real_escape_string($con, $phone);

          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con, $password);

          $gender = stripslashes($_REQUEST['gender']);
          $gender = mysqli_real_escape_string($con, $gender);

          $create_datetime = date("Y-m-d H:i:s");

          $query    = "INSERT into `loginx` (username, age, location, email, phone, password, gender, create_datetime)
                      VALUES ('$username', '$age', '$location', '$email', '$phone', '$password', '$gender', '$create_datetime')";
          $result   = mysqli_query($con, $query);
          if ($result) {
              echo "<div class='container'>
                    <h3>You are registered successfully.</h3>
                    <p>Click here to <a href='login.php' class='link_btn'>Login</a></p>
                    </div>";
          } else {
              echo "<div class='container'>
                    <h3>Required fields are missing.</h3><br/>
                    <p>Click here to <a href='signup.php' class='link_btn'>registration</a> again.</p>
                    </div>";
          }
      } else{
?>
    <div class="container">
        <h1>Join now</h1>
        <form action="" class="form" method = "post">
            <div class="form-group">
                <input type="text" name="username" id="" placeholder="Enter full name">
            </div>
            <div class="form-group">
                <input type="text" name="age" id="" placeholder="Enter age">
            </div>
            
            <div class="form-group">
                <input type="text" name="location" id="" placeholder="Enter location">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="" placeholder="Email id">
            </div>
            <div class="form-group">
                <input type="text" name="phone" id="" placeholder="Mobile no">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div class="form_group_radio">
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                <input type="radio" name="gender" value="other">Other<br><br>
            </div>
            <input type="submit" value="Submit" class="link_btn">

            <div class="login_div">
                <p>Already a member?</p>
                <a class="link_btn" href="login.php">Log in</a>
            </div>
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
