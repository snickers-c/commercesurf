<!DOCTYPE html>
<html>
<head>
  <title>Domov | E-commerce lab</title>
  <?php
    include('./head.php');
    ?>
</head>
<body>
  <?php
    include('./header.php');
    ?>
  <div class="gallery-container">
    <?php
      include('./connect.php');
      $result_kurz = ($conn->query("SELECT * FROM galeria"));
      $row_kurz = [];
      if ($result_kurz ->num_rows > 0)
      {
        $row_kurz = $result_kurz ->fetch_all(MYSQLI_ASSOC);
      }
      if(!empty($row_kurz))
        $no_row = false; // riadok
        $no_rlside_r1 = false; // lava strana riadku
        $no_rrside_r1 = false; // prava strana riadku
        $no_lupper_r1 = false; // vrch lavej casti
        $no_llower_r1 = false; // spodok lavej casti
        $no_rupper_r1 = false; // vrch pravej casti
        $no_rlside_r2 = false; // lava strana 2 riadku
        $no_rrside_r2 = false; // prava strana 2 riadku
        $no_lupper_r2 = false; // vrch lavej casti 2
        $no_llower_r2 = false; // spodok lavej casti 2
        $double_pic = 1; // 1 left pic; 2 right pic
        $row_type = 1;
        $row_side = 1; // 1 left; 2 right
        $row_height = 1; // 1 upper; 2 lower
        foreach($row_kurz as $rows) {        
          if ($row_type == 1) { // prvy row, po vytvorení sa bude preskakovať kým sa nedokončí už vytvorený row
            if ($no_row == false) {
              echo '
    <div class="gallery-row1">';
              $no_row = true;
            }
            if ($row_side == 1 && $no_rlside_r1 == false) {
              echo '
      <div class="gallery-left1">';
              $no_rlside_r1 = true;
            }
            if ($row_height == 1 && $no_lupper_r1 == false) {
              echo '
        <div class="gallery-upper-medium marginbot10 relative contentpic">
          <img class="gallery-medium-pic gallery"
            src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
          <div class="pictext">' . $rows['pictext'] . '</div>
        </div>';
              $no_lupper_r1 = true;
              $row_height = 2;
              continue;
            }
            if ($row_height == 2 && $no_llower_r1 == false && $double_pic == 1) {
              echo '
        <div class="gallery-lower-small">
          <div class="contentpic relative">
            <img class="gallery-small-pic gallery"
              src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
          </div>';
              $double_pic = 2;
              continue;
            }
            if ($row_height == 2 && $no_llower_r1 == false && $double_pic == 2) {
              echo '
          <div class="contentpic relative">
            <img class="gallery-small-pic gallery"
              src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
          </div>
        </div>
      </div>';
              $no_llower_r1 = true;
              $double_pic = 1;
              $row_height = 1;
              $row_side = 2;
              continue;
            }
            if ($row_side == 2 && $no_rrside_r1 == false) {
              echo '
      <div class="gallery-right1">';
              $no_rrside_r1 = true;
            }
            if ($row_height == 1 && $no_rupper_r1 == false && $double_pic == 1) {
              echo '
        <div class="gallery-lower-small">
          <div class="contentpic relative">
            <img class="gallery-small-pic gallery"
              src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
          </div>';
              $double_pic = 2;
              continue;
            }
            if ($row_height == 1 && $no_rupper_r1 == false && $double_pic == 2) {
              echo '
          <div class="contentpic relative">
            <img class="gallery-small-pic gallery"
              src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
          </div>
        </div>';
              $no_rupper_r1 = true;
              $double_pic = 1;
              $row_height = 2;
              continue;
            }
            if ($row_height == 2) {
              echo '
        <div class="gallery-upper-medium margintop10 contentpic relative">
          <img class="gallery-medium-pic gallery"
            src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
        </div>
      </div>
    </div>';
              $row_type = 2;
              $row_height = 1;
              $no_row = false;
              $row_side = 1;
              $no_rlside_r1 = false;
              $no_lupper_r1 = false;
              continue;
            }
          }
          if ($row_type == 2) {
            if ($no_row == false) {
              echo '
    <div class="gallery-row2">';
              $no_row = true;
            }
            if ($row_side == 1 && $no_rlside_r2 == false) {
              echo '
      <div class="gallery-left2">';
              $no_rlside_r2 = true;
            }
            if ($row_height == 1 && $no_lupper_r2 == false && $double_pic == 1) {
              echo '
        <div class="gallery-lowerer-small">
          <div class="contentpic relative">
            <img class="gallery-smaller-pic gallery"
              src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
          </div>';
              $double_pic = 2;
              continue;
            }
            if ($row_height == 1 && $no_lupper_r2 == false && $double_pic == 2) {
              echo '
          <div class="contentpic relative">
            <img class="gallery-smaller-pic gallery"
              src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
            <div class="pictext">' . $rows['pictext'] . '</div>
          </div>
        </div>';
              $double_pic = 1;
              $no_lupper_r2 = true;
              $row_height = 2;
              continue;
            }
            if ($row_height == 2 && $no_llower_r2 == false) {
              echo '
        <div class="gallery-upper-medium margintop10 contentpic relative">
          <img class="gallery-mediumer-pic gallery"
            src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
          <div class="pictext">' . $rows['pictext'] . '</div>
        </div>
      </div>';
              $no_llower_r2 = true;
              $row_side = 2;
              continue;
            }
            if ($row_side == 2 && $no_rrside_r2 == false) {
              echo '
      <div class="gallery-right2">
        <div class="gallery-large contentpic relative">
          <img class="gallery-large-pic gallery"
            src="' . $rows['img'] . '" alt="' . $rows['alt'] . '">
          <div class="pictext">' . $rows['pictext'] . '</div>
        </div>
      </div>
    </div>';
              $no_rrside_r2 = true;
              continue;
            }
          }
        }
    ?>
  </div>
</body>
<footer>
  <?php
  include('./footer.php');
  ?>
</footer>
</html>
