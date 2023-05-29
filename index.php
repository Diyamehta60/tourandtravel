<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nspproject";

$connect = mysqli_connect($servername, $username, $password, $dbname);

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tour&travel website</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  <!-- custom js file link  -->
  <script src="script.js" defer></script>
</head>

<body>
  <!-- header section starts  -->

  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">
      <i class="fas fa-paper-plane"></i>tour and travels
      <!-- <div class="edit">
        <img src="/airplane.png" alt="">
        <span>Tour and travels</span>
      </div> -->
    </a>

    <nav class="navbar">
      <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
      <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
      <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
      <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
      >
      <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
      <a data-aos="zoom-in-left" data-aos-delay="1150" href="#footer">contact us</a>
      <a data-aos="zoom-in-left" data-aos-delay="1150" href="./login.php">login</a>
      <a data-aos="zoom-in-left" data-aos-delay="1150" href="./register.php">Signup</a>
      <a data-aos="zoom-in-left" data-aos-delay="1150" href="./logout.php">Logout</a>
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="https://codeseker.github.io/weather/" class="btn">weather</a>
  </header>

  <!-- header section ends -->
  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $whereToGo = $_POST['whereToGo'];
    $whenToGo = $_POST['whenToGo'];
    $howManyToGo = $_POST['howManyToGo'];

    $sql = "insert into booking values('$whereToGo', '$whenToGo', '$howManyToGo');";
    $result = mysqli_query($connect, $sql);
  }
  ?>


  <!-- home section starts  -->

  <section class="home" id="home">
    <div class="content">
      <span data-aos="fade-up" data-aos-delay="150">follow us</span>
      <h3 data-aos="fade-up" data-aos-delay="300">To Your Dream Destination</h3>
      <p data-aos="fade-up" data-aos-delay="450">
        “Travel makes you realize that no matter how much you know, there’s always more to learn.”
      </p>
      <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a>
    </div>
  </section>

  <!-- home section ends -->

  <!-- booking form section starts  -->

  <section class="book-form" id="book-form">
    <form action="./index.php" method="POST">
      <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
        <span>where to?</span>
        <input type="text" placeholder="place name" name="whereToGo" />
      </div>
      <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
        <span>when?</span>
        <input type="date" name="whenToGo" />
      </div>
      <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
        <span>how many?</span>
        <input type="number" name="howManyToGo" placeholder="number of travelers" value="howManyToGo" />
      </div>
      <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="book now" class="btn" />
    </form>
  </section>

  <!-- booking form section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">
    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
      <video src="Videos/about-vid-2.mp4" muted autoplay loop class="video"></video>
      <div class="controls">
        <span class="control-btn" data-src="Videos/about-vid-4.mp4"></span>
        <span class="control-btn" data-src="Videos/about-vid-5.mp4"></span>
        <span class="control-btn" data-src="Videos/about-vid-3.mp4"></span>
      </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
      <span>why choose us?</span>
      <h3>Nature's Majesty Awaits You</h3>
      <p>
        Immerse yourself in the grandeur of nature's majesty, where awe-inspiring landscapes and serene tranquility
        converge for an unforgettable experience.
      </p>
      <a href="#" class="btn">read more</a>
    </div>
  </section>

  <!-- about section ends -->

  <!-- destination section starts  -->

  <section class="destination" id="destination">
    <div class="heading">
      <span>our destination</span>
      <h1>make yours destination</h1>
    </div>

    <div class="box-container">
      <div class="box" data-aos="fade-up" data-aos-delay="150">
        <div class="image">
          <img src="Images/des-1.jpg" alt="" />
        </div>
        <div class="content">
          <h3>india </h3>
          <p>Vibrant culture, ancient wonders, diverse landscapes.</p>
          <a href="./indian.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
        <div class="image">
          <img src="Images/des-2.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Australia</h3>
          <p>Stunning landscapes, unique wildlife, boundless adventures.</p>
          <a href="./australia.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
        <div class="image">
          <img src="Images/des-3.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Brazil</h3>
          <p>Samba rhythms, Amazon rainforest, vibrant energy.</p>
          <a href="./brazil.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <div class="image">
          <img src="Images/des-4.jpg" alt="" />
        </div>
        <div class="content">
          <h3>South Africa</h3>
          <p>Safari wonders, diverse heritage, captivating landscapes.</p>
          <a href="./south_africa.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="750">
        <div class="image">
          <img src="Images/des-5.jpg" alt="" />
        </div>
        <div class="content">
          <h3>las vegas</h3>
          <p>Desert oasis, dazzling lights, endless entertainment.</p>
          <a href="./lasVegas.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="900">
        <div class="image">
          <img src="Images/des-6.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Alaska</h3>
          <p>Untamed wilderness, majestic glaciers, natural wonders.</p>
          <a href="./alaska.html">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="1150">
        <div class="image">
          <img src="Images/des-7.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Korea</h3>
          <p>Rich history, dynamic culture, scenic beauty.</p>
          <a href="./korea.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="1300">
        <div class="image">
          <img src="Images/des-8.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Vietnam </h3>
          <p>Timeless charm, lush landscapes, vibrant cuisine.</p>
          <a href="./Vietnam.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- destination section ends -->

  <!-- services section starts  -->

  <section class="services" id="services">
    <div class="heading">
      <span>our services</span>
      <h1>countless expericences</h1>
    </div>

    <div class="box-container">
      <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <i class="fas fa-globe"></i>
        <h3>worldwide</h3>
        <p>
          “Take only memories, leave only footprints”.
        </p>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <i class="fas fa-hiking"></i>
        <h3>adventures</h3>
        <p>
          “Life is either a daring adventure or nothing.”
        </p>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <i class="fas fa-utensils"></i>
        <h3>food & drinks</h3>
        <p>
          "Tasting the foods of different places is one of the many reasons to travel."
        </p>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>
          Budget-friendly accommodations for frugal travelers.
        </p>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
        <i class="fas fa-wallet"></i>
        <h3>affordable price</h3>
        <p>
          Great value at an affordable price.
        </p>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
        <i class="fas fa-headset"></i>
        <h3>24/7 support</h3>
        <p>
          Round-the-clock assistance at your service.
        </p>
      </div>
    </div>
  </section>

  <!-- services section ends -->

  <!-- gallery section starts  -->

  <section class="gallery" id="gallery">
    <div class="heading">
      <span>our gallery</span>
      <h1>we record memories</h1>
    </div>

    <div class="box-container">
      <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <img src="Images/gallery-img-1.jpg" alt="" />
        <span>travel spot</span>
        <h3>iceland</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <img src="Images/gallery-img-2.jpg" alt="" />
        <span>travel spot</span>
        <h3>greenland</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <img src="Images/gallery-img-3.jpg" alt="" />
        <span>travel spot</span>
        <h3>alaska</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <img src="Images/gallery-img-4.jpg" alt="" />
        <span>travel spot</span>
        <h3>thailand</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <img src="Images/gallery-img-5.jpg" alt="" />
        <span>travel spot</span>
        <h3>brazil</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <img src="Images/gallery-img-6.jpg" alt="" />
        <span>travel spot</span>
        <h3>maldive</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <img src="Images/gallery-img-7.jpg" alt="" />
        <span>travel spot</span>
        <h3>iceland</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <img src="Images/gallery-img-8.jpg" alt="" />
        <span>travel spot</span>
        <h3>alaska</h3>
      </div>

      <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <img src="Images/gallery-img-9.jpg" alt="" />
        <span>travel spot</span>
        <h3>maldive</h3>
      </div>
    </div>
  </section>

  <!-- gallery section ends -->

  <!-- review section starts  -->

  <section class="review">
    <div class="content" data-aos="fade-right" data-aos-delay="300">
      <span>testimonials</span>
      <h3>good news from our clients</h3>
      <p>
        Clients rejoice as they share their uplifting stories, filling our hearts with joy and inspiration. Their
        glowing testimonials illuminate the path of success, radiating positivity and affirming our commitment to
        excellence.
      </p>
    </div>

    <div class="box-container" data-aos="fade-left" data-aos-delay="600">
      <div class="box">
        <p>
          Amazing service! The team went above and beyond to meet our needs. Prompt communication, top-notch quality,
          and exceptional attention to detail. Highly recommend!
        </p>
        <div class="user">
          <img src="Images/pic-2.png" alt="" />
          <div class="info">
            <h3>Diya Mehta</h3>
            <span>Developer</span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- review section ends -->


  <!-- banner section starts  -->

  <div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
      <span>start your adventures</span>
      <h3>Let's Explore This World</h3>
      <p>
        Embark on an enchanting adventure, where we unravel the wonders of this vast world together. Let's discover new
        horizons, embrace diverse cultures, and create unforgettable memories along the way.
      </p>
      <a href="#book-form" class="btn">book now</a>
    </div>
  </div>

  <!-- banner section ends -->

  <!-- footer section starts  -->

  <section class="footer" id="footer">
    <div class="box-container">
      <div class="box" data-aos="fade-up" data-aos-delay="150">
        <a href="#" class="logo">
          <i class="fas fa-paper-plane"></i>travel
        </a>
        <p>
          connect With Us ....<br>
          Created By Diya Mehta, <br> Dewanshi Jain
        </p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="https://twitter.com/Labdhi323540211?t=miE78Ho9rXxJT_1twosJtA&s=09" class="fab fa-twitter"></a>
          <a href="https://instagram.com/diyaamehta18?igshid=ZDdkNTZiNTM=" class="fab fa-instagram"></a>
          <a href="https://www.linkedin.com/in/diya-mehta-464270233" class="fab fa-linkedin"></a>

        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
        <h3>quick links</h3>
        <a href="#home" class="links">
          <i class="fas fa-arrow-right"></i> home
        </a>
        <a href="#about" class="links">
          <i class="fas fa-arrow-right"></i> about
        </a>
        <a href="#destination" class="links">
          <i class="fas fa-arrow-right"></i> destination
        </a>
        <a href="#services" class="links">
          <i class="fas fa-arrow-right"></i> services
        </a>
        <a href="#gallery" class="links">
          <i class="fas fa-arrow-right"></i> gallery
        </a>
        <a href="#blogs" class="links">
          <i class="fas fa-arrow-right"></i> blogs
        </a>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
        <h3>contact info</h3>
        <p><i class="fas fa-map"></i> jaipur,rajasthan</p>
        <p><i class="fas fa-phone"></i> +123-456-7890</p>
        <a>
          <p><i class="fas fa-envelope"></i>labdhimehta4@gmail.com</p>
          </p>
          <p><i class="fas fa-clock"></i> 7:00am - 10:00pm</p>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <h3>newsletter</h3>
        <p>subscribe for latest updates</p>
        <form action="">
          <input type="email" name="" placeholder="enter your email" class="email" id="" />
          <input type="submit" value="subscribe" class="btn" />
        </form>
      </div>
    </div>
  </section>

  <!-- footer section ends -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script>
    AOS.init({
      duration: 800,
      offset: 150,
    });
  </script>
</body>

</html>