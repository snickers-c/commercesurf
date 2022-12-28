<!DOCTYPE html>
<html>
<head>
  <title>Aktuality | E-commerce lab</title>
  <?php
  include('./head.php');
  ?>
</head>
<body>
  <?php
  include('./header.php');
  ?>
    <img class="background-img"
      src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/Untitled%20design.png"
      alt="white-sand">
    <div class="page-template">
      <section class="section-template">
        <?php
          include('connect.php');
          $result = ($conn->query("SELECT * FROM aktuality WHERE active = 1"));
          $row_aktuality = [];
          if ($result ->num_rows > 0)
          {
            $row_aktuality = $result ->fetch_all(MYSQLI_ASSOC);
          }
          if(!empty($row_aktuality))
            foreach($row_aktuality as $rows)
            {
              echo '
          <div class="news-container">
            <p class="news-title">' . $rows['title'] . '</p>
            <p class="news-autor">Aktuality / ' . $rows['autor'] . '</p>
            <p class="news-text">' . $rows['text'] . '</p>
            <a class="news-readmore" href="aktuality-template?ide=' . $rows['id'] . '">
              Čítajte viac
            </a>
          </div>';
            }
          if(empty($row_aktuality)) {
            echo '<div class="red-text">Momentálne pre Vás nemáme pripravené nič aktuálne.</div>';
          }
  ?>
      </section>
    </div>
</body>
<footer>
  <?php
  include('./footer.php');
  ?>
</footer>
</html>
