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
        <?php
  include('./connect.php');
  $result_kurz = ($conn->query("SELECT * FROM kurzy WHERE slider = 1"));
  $row_kurz = [];
  if ($result_kurz ->num_rows > 0)
  {
    $row_kurz = $result_kurz ->fetch_all(MYSQLI_ASSOC);
  }
  if(!empty($row_kurz))
    foreach($row_kurz as $rows)
    {
      echo '
    <div class="mySlides fade"> 
      <img
        src=" ' . $rows['img']. ' "
        class="slider-img">
      <div class="text">' . $rows['title'] . '</div>
      <a href="kurz-template?ide=' . $rows['id'] . '">
        <button class="find-more-slider-button">Zistiť viac</button>
      </a>
    </div>';
      }
    ?>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br>
    <div style="text-align:center">
        <?php
  for ($i = 1; $i <= $result_kurz ->num_rows; $i++){
    echo '<span class="dot" onclick="currentSlide( ' . $i . ')"></span>';
  }
    
    //<span class="dot" onclick="currentSlide(2)"></span>
    ?>
    </div>
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
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
                    Ahojte sme E-commerce lab, sme malá skupina žiakov SPŠE Hálovej 16 a sme tu, aby sme ťa naučili o
                    niečom čo
                    sa volá Problematika E-commerce. Ponúkame veľký výber kurzov čo ťa pripravia na svet Internetových
                    obchodov
                    (E-shopov). Naše kurzy sú pripravené pre 7, 8 a 9 ročník základných a 1 ročník stredných škôl.
                    Naučíme ta
                    všetko od „Čo je to E-shop“ až po tvorbu vlastného E-shopu.
                </div>
            </div>
            <div class="index-o-nas-button-viac-center">
                <a href="o-nas"><button class="about-us-button">Viac</button></a>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php
  include('./footer.php');
  ?>
</footer>
</html>
