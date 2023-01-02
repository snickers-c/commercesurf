<!DOCTYPE html>
<html>

<head>
    <title>Domov | E-commerce lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <a class="index-o-nas-button-viac-center" href="kurz?ide=' . $rows['id'] . '">
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
    <!-- <dialog open class="modal" id="modal" style="width: 60%;background-color: rgba(45, 175, 227, 1) ;border-radius: 10px; display: none;"> -->
<dialog open id="modulo" style="width: 60%;background-color: rgba(45, 175, 227, 1) ;border: 1px; border-radius: 10px; display: none; position: fixed; z-index: 1002; bottom: 0;">
    <div style="color: white; font-weight: bold; font-size: 18px;">
        <div id="closeIcon" style="display: none;">
        </div>
        <div class="title-wrap">
            <h4 style=" margin: 0; padding: 20px 10px 20px 10px; font-size: 22px;">Cookie Consent</h4>
        </div>
        <div style=" padding-left: 20px; ">
            <div class="msg-wrap">
                <p style="margin: 0; padding-bottom: 20px;">This website uses cookies or similar technologies, to enhance your browsing experience
                    and provide
                    personalized recommendations. By continuing to use our website, you agree to our <a
                        style="color:#115cfa" href="/ecommerceLab/obchodne-podmienky.php">Privacy Policy</a></p>
                <div  style="padding-bottom: 10px;">
                    <button class="blue-button" style="background-color: white; color: rgba(45, 175, 227, 1); font-weight: bold ; border-radius: 5px; " onclick="acceptCookieConsent();">Accept</button>
                </div>
            </div>
        </div>
    </div>
    
</dialog>
<!-- </dialog> -->
<script>



// Create cookie
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    
    // Delete cookie
    function deleteCookie(cname) {
        const d = new Date();
        d.setTime(d.getTime() + (24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=;" + expires + ";path=/";
    }
    
    // Read cookie
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    
    // Set cookie consent
    function acceptCookieConsent(){
        deleteCookie('user_cookie_consent');
        setCookie('user_cookie_consent', 1, 30);
        document.getElementById("modulo").style.display = "none";
    }
    
    
    let cookie_consent = getCookie("user_cookie_consent");
    if(cookie_consent != ""){
        document.getElementById("modulo").style.display = "none";
    }else{
        document.getElementById("modulo").style.display = "block";
    }</script>
</body>
<footer>
    <?php
  include('./footer.php');
  ?>
</footer>

</html>
