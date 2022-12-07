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
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img
        src="https://media.istockphoto.com/id/1343540448/nl/foto/gravel-road-through-a-lined-with-trees-and-a-windmill-on-the-field.jpg?s=1024x1024&w=is&k=20&c=A4QqUnSNLboUGhID8gDeEo7yaL5Q7XGSP1-f2zOf91k="
        class="slider-img">
      <div class="text">Caption Text</div>
      <a href="/ecommerceLab/error404.php">
        <button class="find-more-slider-button">Zistiť viac</button>
      </a>
    </div>
    <div class="mySlides fade">
      <img
        src="https://media.istockphoto.com/id/1343540448/nl/foto/gravel-road-through-a-lined-with-trees-and-a-windmill-on-the-field.jpg?s=1024x1024&w=is&k=20&c=A4QqUnSNLboUGhID8gDeEo7yaL5Q7XGSP1-f2zOf91k="
        class="slider-img">
      <div class="text">Caption Two</div>
      <a href="/ecommerceLab/error404.php">
        <button type="button" class="find-more-slider-button">Zistiť viac</button>
      </a>
    </div>
    <div class="mySlides fade">
      <img
        src="https://media.istockphoto.com/id/1343540448/nl/foto/gravel-road-through-a-lined-with-trees-and-a-windmill-on-the-field.jpg?s=1024x1024&w=is&k=20&c=A4QqUnSNLboUGhID8gDeEo7yaL5Q7XGSP1-f2zOf91k="
        class="slider-img">
      <div class="text">Caption Three</div>
      <a href="/ecommerceLab/error404.php">
        <button type="button" class="find-more-slider-button">Zistiť viac</button>
      </a>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
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
        <a href="o-nas.php"><button class="about-us-button">Viac</button></a>
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
