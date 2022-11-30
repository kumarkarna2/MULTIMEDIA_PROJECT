<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <title>Gaming Hub</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/sections.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>

<body>
  <nav class="header">
    <div class="left">
      <a href="home.php"><img src="images/logo.png" alt="" /></a>
      <!-- <a href="#"><img src="images/logo.png" alt=""></a> -->
    </div>
    <div class="mid">
      <ul class="navbar">
        <li><a href="home.php" class="active">HOME</a></li>
        <li>
          <a href="articles.php">ARTICLES</a>
        </li>
        <li>
          <a href="games.php">GAMES</a>
        </li>
        <li>
          <a href="news.php">NEWS</a>
        </li>
        <li><a href="contact.php">CONTACT US</a></li>
      </ul>
    </div>
  </nav>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $msg = $_POST["message"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact (name, email, phone, msg)
  VALUES ('$name', '$email', '$phone', '$msg')";

    if ($conn->query($sql) === TRUE) {
      echo "<div class='container'>
          <h3>Message Sent.</h3><br/>
          </div>";
    } else {
      echo "<div class='container'>
          <h3>Unable to send message.</h3><br/>
          </div>Error: " . $sql . "<br>" . $conn->error;
    }
  }

  ?>

  <footer>
    <div class="reachus">
      <p>Reach us</p>
    </div>
    <div class="footer_div1">
      <ul>
        <li class="fb">
          <a href="https://www.facebook.com/ASUSROGInd/" target="_blank"><i class="bi bi-facebook"></i></a>
        </li>
        <li class="insta">
          <a href="https://www.instagram.com/asusrog.in/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/asus_rog_in?lang=en" target="_blank"><i class="bi bi-twitter"></i></a>
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