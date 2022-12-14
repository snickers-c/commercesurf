<!DOCTYPE html>
<html>
<head>
  <?php
    include('./connect.php');
    $urle = $_SERVER['REQUEST_URI'];
    $urle_components = parse_url($urle);
    parse_str($urle_components['query'], $params);
      $result_kurze = ($conn->query("SELECT * FROM kurzy_templates WHERE id = $params[ide]"));
      if ($result_kurze ->num_rows > 0)
        {
          $row_kurze = $result_kurze ->fetch_all(MYSQLI_ASSOC);
        }
      foreach($row_kurze as $rowse) 
        {
          echo '<title>' . $rowse['title'] . ' | E-commerce lab</title>';
        }
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
          <?php
    include('./connect.php');
    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $result_kurz = ($conn->query("SELECT * FROM kurzy_templates WHERE id = $params[ide]"));
    $dates_kurz = ($conn->query("SELECT * FROM dates WHERE kurz = $params[ide]"));
    $row_kurz = [];
    $date_row = [];
    if ($result_kurz ->num_rows > 0)
    {
      $row_kurz = $result_kurz ->fetch_all(MYSQLI_ASSOC);
    }
    if(!empty($row_kurz))
    foreach($row_kurz as $rows) 
    {
      echo $rows['title'] . '
      </div>
      <div>
        <div class="course-template-small-title">
          Popis kurzu
        </div>
        <div class="course-template-img">
          <img src="' . $rows['img'] .'"
            class="course-template-img">
        </div>
        <p>'
         . $rows['text'] . 
        '</p>
      </div>
      <div class="course-template-border">
        <p class="course-template-available">
          Dostupne termíny
        </p>';
        
        if ($dates_kurz ->num_rows > 0)
        {
          $date_row = $dates_kurz ->fetch_all(MYSQLI_ASSOC);
        }
        if(!empty($date_row)) {
          foreach($date_row as $dates) 
          {
          echo '<div class="course-template-course-instance">
            <div class="course-template-course-title">
              <p class="course-template-date">' . $dates['date'] . '</p>
              <div class="course-template-instance-info">Trvanie: '
                . $dates['trvanie'] .
              ' &nbsp&nbspMiesto: Hálova 16 &nbsp&nbspLektor: ' . $rows['lektor'] . '</div>
            </div>
            <div class="course-template-course-section">
              <div class="course-template-course-price">'
                . $rows['price'] .
              '€</div>
              <div>
                <button class="blue-button"><a class="course-a"href="prihlaska?ide='
                . $rows['id'] . '&idd=' . $dates['id'] .'">
                  Prihlásiť sa
                </a></button>
              </div>
            </div>
          </div>';
          }
        }
        if(empty($date_row)) {
          echo '<div class="red-text" style="margin-top:30px;">Momentálne pre tento kurz nie sú určené žiadne termíny.</div>';
        }
      }
          ?>
        </div>
      </div>
    </section>
  </div>
</body>
<footer>
  <?php
    include('./footer.php');
  ?>
</footer>
</html>
