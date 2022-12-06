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

  .login_div p {
    margin: auto;
    margin-top: 1.2rem;
    margin-bottom: 1.2rem;
  }
</style>

<body>
  <nav class="header">
    <div class="left">
      <a href="index.html"><img src="images/logo.png" alt="" /></a>

    </div>
    <div class="mid">
      <ul class="navbar">
        <li><a href="index.html" class="active">HOME</a></li>
        <li>
          <a href="articles.html">ARTICLES</a>
        </li>
        <li>
          <a href="games.html">GAMES</a>
        </li>
        <li>
          <a href="news.html">NEWS</a>
        </li>
        <li><a href="contact.html">CONTACT US</a></li>
      </ul>
    </div>
    <div class="right">
      <div>
        <ul>
          <li>
            <a href="login.php" class="link_btn">LOG IN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  require('connection_check.php');
  // When form submitted, insert values into the database.
  if (isset($_REQUEST['username'])) {

    $select = mysqli_query($con, "SELECT * FROM loginx WHERE email = '" . $_POST['email'] . "'");

    if (mysqli_num_rows($select)) {
      echo "<div class='form'>
                  <h3>This email address is already used!</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";

      die(mysqli_error($con));
      // exit();
      // exit('This email address is already used!');
    }

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
  } else {
  ?>
    <div class="container">
      <h1>Join now</h1>
      <form action="" class="form" method="post">
        <div class="form-group">
          <input type="text" name="username" id="" placeholder="Enter full name" required>
        </div>
        <div class="form-group">
          <input type="number" name="age" id="" placeholder="Enter age" required>
        </div>

        <div class="form-group">
          <input type="text" name="location" id="" placeholder="Enter location">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="" placeholder="Email id" required>
        </div>
        <div class="form-group">
          <input type="number" name="phone" id="" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Mobile no" required />

        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Enter password" minlength="8" required>
        </div>
        <div class="form_group_radio">
          <input type="radio" name="gender" value="male" required>Male<br>
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