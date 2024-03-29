<?php
session_start();
if (!isset($_SESSION['username']))
  header('location : index.html')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <title>Games</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="css/games/style.css" />
<link rel="stylesheet" href="css/games/footer.css" />
<link rel="stylesheet" href="css/games/section.css" />
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
          <a href="articles.php">ARTICLES</a>
        </li>
        <li>
          <a href="news.php">NEWS</a>
        </li>
        <li><a href="contact.php">CONTACT US</a></li>
      </ul>
    </div>
    <div class="right">
      <div class="user"><?php echo $_SESSION['username']; ?></div>
      <div><a href="logout.php" class="link_btn">LOGOUT</a></div>
    </div>
  </nav>

  <div class="sections">
    <div class="current_page_container">
      <p class="current_page_text">GAMES</p>
    </div>
    <div class="section1">
      <div class="container-left1">
        <p class="heading">We are ROCKSTAR!</p>
        <p class="article">
          Rockstar Games welcomes input from the gaming community. However,
          any submissions to Rockstar Games of any nature whatsoever, whether
          through this site or otherwise, and whether via electronic or other
          mean, become the sole and exclusive property of Rockstar Games,
          which shall have full right, title and interest thereto, including
          under copyright, in all media now existing or hereafter created, and
          without any obligation to account or make any payment to the
          submitter for any use thereof. No purported reservation of rights
          incorporated in or accompanying any submission shall have any force
          or effect. By making a submission to Rockstar Games, you hereby
          agree to all of the foregoing.
        </p>
      </div>
      <div class="container-mid1">
        <img class="pics" src="images/games/gta_5_logo.png" alt="" />
      </div>
      <div class="container-right1">
        <p class="heading">Welcome to Los Santos</p>
        <p class="article">
          When a young street hustler, a retired bank robber, and a terrifying
          psychopath find themselves entangled with some of the most
          frightening and deranged elements of the criminal underworld, the
          U.S. government, and the entertainment industry, they must pull off
          a series of dangerous heists to survive in a ruthless city in which
          they can trust nobody — least of all each other. Current players can
          transfer both GTAV Story Mode progress and GTA Online characters and
          progression to PlayStation 5 and Xbox Series X|S with a one-time
          migration.
        </p>
      </div>
    </div>

    <div class="section2">
      <div class="container-right2">
        <img class="pics" src="images/games/img1.png" alt="" />
      </div>
      <div class="container-left2">
        <p class="heading">Stunning Visuals | Faster Loading</p>
        <p class="article">
          Enhanced levels of fidelity and performance with new graphics modes
          featuring up to 4K resolution, up to 60 frames per second, HDR
          options, ray tracing, improved texture qualities, and more.
        </p>
        <p class="article">
          Quicker access to the action as the world of Los Santos and Blaine
          County load in faster than ever before.
        </p>
      </div>
    </div>

    <div class="section3">
      <div class="container-left3">
        <p class="heading">Immersive Controls | 3D Audio</p>
        <p class="article">
          Feel new levels of responsiveness with Haptic Feedback and dynamic
          resistance via the Adaptive Triggers on PlayStation 5's DualSense
          wireless controller, from directional damage to weather effects,
          rough road surfaces to explosions, and much more.
        </p>
        <p class="article">
          Hear the sounds of the world with pinpoint precision: the throttle
          of a stolen supercar, the rattle of neighboring gunfire, the roar of
          a helicopter overhead, and more
        </p>
      </div>

      <div class="container-right3">
        <img class="pics" src="images/games/img2.png" alt="" />
      </div>
    </div>

    <div class="section4">
      <div class="container-right4">
        <img class="pics" src="images/games/img3.png" alt="" />
      </div>
      <div class="container-left4">
        <p class="heading">Exclusive New Content | New Menu Design</p>
        <p class="article">
          Step into Hao’s Special Works at the Los Santos Car Meet, featuring
          elite new upgrades and exclusive modifications. Then take these
          high-performance vehicles into HSW races, new time trials, and more.
        </p>
        <p class="article">
          Immediately access everything GTA Online has to offer right from the
          main menu, including the latest and most popular updates.
        </p>
      </div>
    </div>
    <div class="download_section">
      <div class="download_container">
        <p class="heading">Download GTA 5</p>
        <a href="https://www.rockstargames.com/V/" target="_blank" style="text-decoration: none;"><button class="link_btn">Download</button></a>
      </div>
    </div>
  </div>

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