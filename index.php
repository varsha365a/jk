<!DOCTYPE html>
<html lang="en">

<head>
    <title>Football India</title>

    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <!-- Montserrat font library -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

<!-- Header file linked using PHP -->
<?php 
include "header.php";
?>
  <!-- Carousel gallery -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgs/fb1.jpg" class="d-block w-100"   alt="..." style="position: relative;">
      </div>
      <div class="carousel-item">
        <img src="imgs/fb2.jpg" class="d-block w-100" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="imgs/fb3.jpg" class="d-block w-100" alt="..." >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div><br>

  <!-- Images for animation -->
  <div class="container">
  <img src="imgs/man.jpg" class="man" height="100">
  <img src="imgs/fooba.jpeg" height="100"  class="football">
  <img src="imgs/goal.jpg" class="goal" height="100">
  </div>
  
  <?php include("dbcon.php"); ?>
   <!-- Football text -->
  <section class="fbtext" style="padding: 60px;">
    <h2>Welcome to Our Football Website!</h2>
    <p>
      Football, the beautiful game, captivates millions around the globe with its blend of skill, strategy, and sheer
      passion. From the thunderous roar of the crowd to the delicate touch of a player's foot on the ball, every moment
      is filled with anticipation and excitement.

      On the pitch, players become heroes, weaving through defenses with precision dribbling, launching thunderous shots
      towards the goal, and executing intricate passing sequences that leave opponents bewildered. Each match is a
      theater of dreams, where glory and heartbreak hang in the balance with every kick of the ball.

      But football is more than just a game; it's a cultural phenomenon that transcends borders and unites people from
      all walks of life. Whether it's the World Cup, the Champions League, or a local derby, football has the power to
      bring communities together and ignite the collective spirit of nations.

      Off the pitch, the drama continues, with transfer sagas, managerial rivalries, and financial power struggles
      dominating headlines. From the boardroom to the training ground, the quest for success drives clubs to push the
      boundaries of innovation and ambition.

      Yet amidst the glamour and spectacle, football retains its core essence—a simple game played with joy and passion.
      It's a sport where dreams are made and broken, where the underdog can triumph against all odds, and where moments
      of brilliance can inspire generations.

      In the end, whether you're a player, a fan, or simply an admirer from afar, football's enduring appeal lies in its
      ability to evoke emotion, create memories, and remind us all of the power of the beautiful game.
    </p>
  
    <p>This is a place where you can find information about football teams, players, matches, news, and much more.</p>
    <a href="join_us.php"><button class="button"><span>JOIN US NOW</span></button></a>
  </section>

  <!-- Footer link through PHP -->
  <?php
  include "footer.php";
  ?>

</body>

</html>