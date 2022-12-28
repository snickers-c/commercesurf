<!DOCTYPE html>
<html>
<head>
  <?php
  include('connect.php');
  include('./head.php');
  $url = $_SERVER['REQUEST_URI'];
  $url_components = parse_url($url);
  parse_str($url_components['query'], $params);
  $result = ($conn->query("SELECT * FROM aktuality_templates WHERE id = $params[ide]"));
            $row_aktuality = [];
            if ($result ->num_rows > 0)
            {
              $row_aktuality = $result ->fetch_all(MYSQLI_ASSOC);
            }
            if(!empty($row_aktuality))
              foreach($row_aktuality as $rows)
              {
                echo '<title>' . $rows['title'] . ' | E-commerce lab</title>';
              }
  ?>
</head>
<?php
include('./header.php');
?>
<body>
  <img class="background-img"
    src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Untitled%20design.png"
    alt="white-sand">
  <div class="page-template">
    <section class="section-template">
      <?php
            if(!empty($row_aktuality))
              foreach($row_aktuality as $rows)
              {
                echo '
          <div class="news-template-title">
            ' . $rows['title'] . '
          </div>
          <div class="news-template-text-div">
            <img class="news-template-img"
              src="' . $rows['img'] . '">
            <p class="news-template-text">' . $rows['text'] . '</p>
          </div>';
              }
      ?>
    </section>
  </div>
</body>
<?php
include('./footer.php');
?>
</html>
