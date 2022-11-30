<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <title>Gaming Hub</title>
  </head>
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/sections.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

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
            <a href="articles.html">ARTICLES</a>
          </li>
          <li>
            <a href="games.html">GAMES</a>
          </li>
          <li>
            <a href="news.html"
              >NEWS</a
            >
          </li>
        </ul>
      </div>
        <div class="right">
            <div class="user"><?php echo $_SESSION['username']; ?></div>
            <div><a href="logout.php" class="link_btn">LOGOUT</a></div>
        </div>
    </nav>
    <!--END main header -->
    <div class="container">
        <h1>Contact Us</h1>
        <form action="contacted.php" class="form" method = "post">
        <div class="form-group">
                <input type="text" name="username" id="" placeholder="Enter full name">
            </div>
            
            <div class="form-group">
                <input type="email" name="email" id="" placeholder="Email id">
            </div>

            <div class="form-group">
                <input type="text" name="phone" id="" placeholder="Mobile no">
            </div>

            <div class="form-group">
                <input type="text" name="message" id="" placeholder="Enter your message">
            </div>
            <input type="submit" value="Submit" class="link_btn">
        </form>
    </div>
    <!-- Start Footer -->
    <footer>
      <div class="reachus">
        <p>Reach us</p>
      </div>
      <div class="footer_div1">
        <ul>
          <li class="fb">
            <a href="https://www.facebook.com/ASUSROGInd/" target="_blank"
              ><i class="bi bi-facebook"></i
            ></a>
          </li>
          <li class="insta">
            <a
              href="https://www.instagram.com/asusrog.in/?hl=en"
              target="_blank"
              ><i class="bi bi-instagram"></i
            ></a>
          </li>
          <li class="twitter">
            <a href="https://twitter.com/asus_rog_in?lang=en" target="_blank"
              ><i class="bi bi-twitter"></i
            ></a>
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


</html>