<?php
  //https://developers.google.com/gmail/design/css

  include_once('./connect.php');
  $ide = $_POST["kurzid"];
  echo $ide;
  $result = ($conn->query("SELECT * FROM kurzy WHERE id = $ide"));
  $row = [];
  if ($result->num_rows > 0) 
  {
      $row = $result->fetch_all(MYSQLI_ASSOC);
  }
  if (!empty($row)) 
  {
    foreach($row as $data) 
    {
      $kurz = $data['title'];
    }
  }

  header("Location: dakujeme-za-rezervaciu", TRUE, 301);  
  $meno = $_POST["meno"];
  $priezvisko = $_POST["priezvisko"];
  $email = $_POST["email"];
  $telefon = $_POST["telefon"];
  $ulica = $_POST["ulica"];
  $mesto = $_POST["mesto"];
  $psc = $_POST["psc"];
  
  $receiver = $email;
  $subject = "Ďakujeme";
  $body = '
  <div>
    <div href="" style="padding-bottom: 25px; text-align: center; cursor: default;">
      <img src="https://raw.githubusercontent.com/snickers-c/commercesurf/main/ecommerceLab/pictures/unknown%201.png" >
    </div>
    <div style="margin-left: auto; margin-right: auto; padding-top: 20px;width: 100%; max-width: 800px;">
      <div>
        <div style="background-color: rgba(45, 175, 227, 1); color: white; font-size: 30px; font-weight: bold; padding-left: 20px; padding-top: 15px;">
          Detail rezervacie
        </div>
      </div>
      <div style="border-color: gray; border-style: solid; border-width: 0 1px 1px 1px; padding-top: 20px; padding-left: 30px;">
        <div style="font-size: 21px;">
          <b>Nazov kurzu</b>
          : '.$kurz.'<br><br>
          <b>Nazov kurzu</b>
          : zazidkovy kurz<br><br>
          <b>Nazov kurzu</b>
          : zazidkovy kurz<br><br>
          <b>Nazov kurzu</b>
          : zazidkovy kurz<br><br>
        </div>
      </div>
    </div>
  </div>';
  $headers = "From: info.ecommercelab@gmail.com";
  $headers .= "MINE-Version:\r\n";
  $headers .= "Content-Type: text/html;charset-8859-1\r\n";
  mail($receiver,$subject,$body,$headers);

  $sql = "INSERT INTO zakaznici (meno , priezvisko , email , telefon, ulica , mesto , psc, kurz) VALUES ('$meno', '$priezvisko', '$email', '$telefon', '$ulica', '$mesto', '$psc', '$kurz');";
mysqli_query($conn, $sql);
?>
