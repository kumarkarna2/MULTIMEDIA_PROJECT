<?php
session_start();
if(!isset($_SESSION['username']))
    header('location : index.html')
?>

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
    <title>Articles</title>
  </head>
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="css/articles/style.css" />
  <link rel="stylesheet" href="css/articles/footer.css" />
  <link rel="stylesheet" href="css/articles/section.css" />
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
            <a href="games.php">GAMES</a>
          </li>
          <li>
            <a href="news.php"
              >NEWS</a
            >
          </li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div>
      </div>
        <div class="right">
            <div class="user"><?php echo $_SESSION['username']; ?></div>
            <div><a href="logout.php" class="link_btn">LOGOUT</a></div>
        </div>
    </nav>

    <div class="sections">
      <div class="current_page_container">
        <p class="current_page_text">ARTICLES</p>
      </div>
      <div class="section1">
        <div class="container-left1">
          <p class="heading">
            THE ROG STRIX GOLD AURA EDITION SERIES POWER SUPPLIES ARE READY TO
            LIGHT UP YOUR NEXT-GEN RIG
          </p>
          <p class="article">
            We built the original ROG Strix 850W Gold PSU to provide stable,
            efficient, cool and quiet power to mainstream rigs of all stripes.
            But technology marches ever onward, and with modern graphics cards
            driving the new ATX 3.0 standard of power delivery, it’s time to
            take Strix to the next level. Introducing the ROG Strix Gold Aura
            Edition, which brings improved cooling, 16-pin PCIe support, and
            Aura Sync RGB to your next power supply. Like its predecessor, ...
            <a
              href="https://rog.asus.com/articles/psus/the-rog-strix-gold-aura-edition-series-power-supplies-are-ready-to-light-up-your-next-gen-rig/"
            >
              Read More
            </a>
          </p>
        </div>
        <div class="container-right1">
          <img class="pics" src="images/articles/img1.webp" alt="" />
        </div>
      </div>

      <div class="section2">
        <div class="container-right2">
          <img class="pics" src="images/articles/img2.webp" alt="" />
        </div>
        <div class="container-left2">
          <p class="heading">
            REIGN SUPREME WITH ROG AND ROG STRIX Z790 GAMING MOTHERBOARDS
          </p>
          <p class="article">
            Intel’s 13th generation of Core CPUs have arrived, and they’re ready
            for action. Boasting up to eight performance cores and sixteen
            efficiency cores for a total of 32 threads, and arriving with
            out-of-the-box support for DDR-5600 and next-gen PCIe 5.0 graphics
            cards and M.2 SSDs, these chips are sure to draw the eye of
            discerning gamers—and we’ve got the motherboards you need to unlock
            their full potential. ...
            <a
              href="https://rog.asus.com/articles/maximus-motherboards/z790-motherboard-guide/"
            >
              Read More
            </a>
          </p>
        </div>
      </div>

      <div class="section3">
        <div class="container-left3">
          <p class="heading">
            ROG STRIX SCAR VS STRIX G: WHAT'S THE DIFFERENCE BETWEEN ROG'S
            ESPORTS LAPTOPS?
          </p>
          <p class="article">
            ROG is so committed to gamers, we put it right in our name. Every
            product we build is designed to provide gamers with the best
            possible experiences available on PC today. But even within the ROG
            umbrella, there is one sub-brand that stands a head above the others
            as the leader in total horsepower: ROG Strix. More than any other
            ROG family, seeing the Strix name implies that the machine will have
            a pairing of the fastest CPU, GPU and display refresh rates
            available for laptops. The line contains a few different models,
            including the Strix G15, ...
            <a
              href="https://rog.asus.com/articles/rog-gaming-laptops/rog-strix-scar-vs-strix-g-whats-the-difference-between-rogs-esports-laptops/"
            >
              Read More
            </a>
          </p>
        </div>

        <div class="container-right3">
          <img class="pics" src="images/articles/img3.webp" alt="" />
        </div>
      </div>

      <div class="section4">
        <div class="container-right4">
          <img class="pics" src="images/articles/img4.webp" alt="" />
        </div>
        <div class="container-left4">
          <p class="heading">
            WHAT IS PANEL OVERDRIVE IN ARMOURY CRATE, AND SHOULD I ENABLE IT?
          </p>
          <p class="article">
            To explain how Overdrive works (and why you want it turned on), we
            first need to understand a concept known as response time. Response
            time is the amount of time it takes for the pixels on your screen to
            shift from one shade to another—usually a few milliseconds. A panel
            with a slow response time will result in ghosting during fast-moving
            scenes, especially involving certain dark shades. So as you whip
            your gun around, you'll see a small trail of blur behind everything
            that moves—giving your ...
            <a
              href="https://rog.asus.com/articles/rog-gaming-laptops/what-is-panel-overdrive-in-armoury-crate/"
            >
              Read More
            </a>
          </p>
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
