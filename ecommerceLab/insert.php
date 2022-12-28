<?php
    <?php
    header("Location: http://localhost/ecommerceLab/kurzy.php", TRUE, 301);
   

    include_once('./connect.php');
    $meno = $_POST["meno"];
    $priezvisko = $_POST["priezvisko"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $ulica = $_POST["ulica"];
    $mesto = $_POST["mesto"];
    $psc = $_POST["psc"];


    $sql = "INSERT INTO zakaznici (meno , priezvisko , email , telefon, ulica , mesto , psc) VALUES ('$meno', '$priezvisko', '$email', '$telefon', '$ulica', '$mesto', '$psc');";
mysqli_query($conn, $sql);


?>
