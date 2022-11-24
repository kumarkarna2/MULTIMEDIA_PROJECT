<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sections.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

</head>
<body>
    <nav class="header">
        <div class="left">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <!-- <a href="#"><img src="images/logo.png" alt=""></a> -->
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
    </nav>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gym";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO contacted (username, email, phone, message)
  VALUES ('$name', '$email', '$phone', '$message')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<div class='container'>
          <h3>Message Sent.</h3><br/>
          </div>";
  }
  else {
    echo "<div class='container'>
          <h3>Unable to send message.</h3><br/>
          </div>Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  }
  
?>

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