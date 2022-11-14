<!DOCTYPE html>
<html>
<head>
  <title>Kurzy | E-commerce lab</title>
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
      <div class="course-title">
        Naše kurzy
      </div>
      <?php
      include('./connect.php');
      $result_kurz = ($conn->query("SELECT * FROM kurzy WHERE active = 1"));
      $row_kurz = [];
      if ($result_kurz ->num_rows > 0)
      {
        $row_kurz = $result_kurz ->fetch_all(MYSQLI_ASSOC);
      }
      if(!empty($row_kurz))
        foreach($row_kurz as $rows)
        {
           echo '<div class="course">
            <div class="course-img-div">
              <img class="course-img"
              src="' . $rows["img"] . '">
            </div>
            <div class="course-text">
              <p>
                '. $rows['title'] .'
              </p>
              <p>
                '. $rows['text'] .'
              </p>
              <button class="blue-button"><a class="course-a" href="kurz-template.php">Zobraziť kurz</a></button><br><br>
            </div>
            </div>';
        }
      ?>
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
