<!DOCTYPE html>
<html>
<head>
  <title>Domov | E-commerce lab</title>
  <?php
  include('./head.php');
  ?>
</head>
<body>
  <!-- horné menu -->
  <?php
  include('./header.php');
  ?>
  <!---->
  <!-- Video -->
  <div class="video-div">
    <div class="heading">E-COMMERCE LAB</div>
    <video class="video" width="100%" height="100%" autoplay="autoplay" muted="muted" loop="loop">
      <source src="videos/Final.mp4" type="video/mp4">
    </video>
  </div>
  <div class="line-breaker"></div>
  <!---->
  <!-- Slider -->
  <div class="slider">
    <img class="slider-photo"
      src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Untitled%20design.png">
    <div class="slider-title">X Kurz</div>
    <div class="slider-slide-buttons">
      <div class="slider-left"><
      </div>
      <div class="slider-right">></div>
    </div>
    <div class="find-more-slider-button">Zistiť viac</div>
  </div>
  <div class="line-breaker"></div>
  <!---->
  <!-- O nás -->
  <div class="about-us-box-container">
    <img class="about-us-background"
      src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/pozadie3.png">
    <div class="about-us-box">
      <div class="about-us-box-title">O NÁS</div>
      <div class="about-us-box-text-div">
        <div class="about-us-box-text">
          Ahojte sme E-commerce lab, sme malá skupina žiakov SPŠE Hálovej 16 a sme tu, aby sme ťa naučili o niečom čo
          sa volá Problematika E-commerce. Ponúkame veľký výber kurzov čo ťa pripravia na svet Internetových obchodov
          (E-shopov). Naše kurzy sú pripravené pre 7, 8 a 9 ročník základných a 1 ročník stredných škôl. Naučíme ta
          všetko od „Čo je to E-shop“ až po tvorbu vlastného E-shopu.
        </div>
      </div>
      <div>
        <a href="o-nas.php" target="_top"><button class="about-us-button">Viac</button></a>
      </div>
    </div>
  </div>
  <div class="line-breaker"></div>
  <!---->
  <!-- Line breaker, skopirovat vsade kde chcete oddelit stránku -->
  <div class="line-breaker"></div>
  <!---->
</body>
<footer>
  <?php
  include('./footer.php');
  ?>
</footer>
</html>
