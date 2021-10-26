
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animal Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style.css" rel="stylesheet" type="text/css" />
    </head>

<body>
    <?php

   if(isset($_POST["fname"])){
    echo "Formulardaten bekommen<br>";   
  
    $password_visibile = $_POST["pass"]; 
    $password_codificata = md5($password_visibile); 
 

   $con = new mysqli("", "root", "janina", "tierheim");
   $sql = "SELECT * FROM registrierungsformular WHERE vorname='" . $_POST['fname'] . "' AND passwort='" . $password_codificata ."'";
//    echo "$sql<br>";
   $res = mysqli_query($con, $sql);

//    echo "Num rows: " . mysqli_num_rows($res);
   if(mysqli_num_rows($res) > 0) {
       echo "Login erlaubt<br>";
       $benutzer = $_POST["fname"];  
       $_SESSION["fname"]  = $_POST["fname"];
       echo "Hallo $benutzer<br>";
       echo "<a href='DogsVerwaltung.php'>Datenverwaltung<br></a>";
       echo "<a href='Einloggen.php'>Logoff</a>";

       } else {
           echo "Login nicht erlaubt<br>";
           exit("<p>Kein Zugang<br><a href='Einloggen.php'>" . "Zum Login</a></p>");

       }
       mysqli_close($con);   

       echo "<br>Session: " .  $_SESSION["fname"];
      } else {
        echo "Keine Daten bekommen <br>";
        if(!isset($_SESSION["fname"])){
            exit("<p>Kein Zugang<br><a href='Einloggen.php'>" . "Zum Login</a></p>");
        } else {
            echo "Session bereits gestartet";
        }
    }


?>  




</body>

</html>    