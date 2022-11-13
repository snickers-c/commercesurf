<!DOCTYPE html>
<html>

<head>
  <title>* | E-commerce lab</title>
  <?php
  include('./head.php');
  ?>
</head>

<body>
  <?php
  include('./header.php');
  ?>
  <img src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Untitled%20design.png"
    class="background-img">
  <div class="page-template">
    <section class="section-template">
      <div class="couese-template-title-center">
        <div class="course-template-title">
          Zážitkový kurz
        </div>
        <div>
          <div class="course-template-small-title">
            Popis kurzu
          </div>
          <div class="course-template-img">
            <img src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Entrance.png"
              class="course-template-img">
          </div>
          <p>
            V našom zážitkovom kurze vás oboznámime s problematikou v E-commerce a<br>
            zaučíme vás do nej.<br><br>
            Je to budúcnosť, preto vám ponúkame certifikované kurzy v tejto oblasti.
          </p>
        </div>
        <div class="course-template-border">
          <p class="course-template-available">
            Dostupne datumy
          </p>
          <?php
          /*
          $course = '<div class="course-template-course-instance">
          <div class="course-template-course-title">
          <p class="course-template-date"> 21.10.2022 a 23.10.2022</p>
          <div>
          dlzka 2 hodiny
          </div>
          </div>
          <div class="course-template-course-section">
          <div class="course-template-course-price">
          20$
          </div>
          <div>
          <button class="blue-button">
          Objednat
          </button>
          </div>
          </div>
          </div>';
          echo str_repeat($course, 3);*/
          ?>
          <div class="course-template-course-instance">
            <div class="course-template-course-title">
              <p class="course-template-date">21.10.2022 a 23.10.2022</p>
              <div>
                dlzka 2 hodiny
              </div>
            </div>
            <div class="course-template-course-section">
              <div class="course-template-course-price">
                20$
              </div>
              <div>
                <button class="blue-button">
                  Objednat
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="course-template-select">
        </div>
        <div>
          <div class="course-template-small-title">
            Kontakt
          </div>
          <div class="course-template-bottom-text">
            Hálova 16, Petržalka, Slovensko<br><br>
            +421 948 068 744<br><br>
            info@modelsnavigator.com<br><br>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="line-breaker"></div>
</body>
<footer>
  <?php
  include('./footer.php');
  ?>
</footer>

</html>
