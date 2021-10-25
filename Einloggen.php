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
       echo "Name : $benutzer<br>";
       echo "<a href='DogsVerwaltung.php'>Datenverwaltung</a>";

       } else {
           echo "Login nicht erlaubt";
       }
       mysqli_close($con);   
    
?>  




</body>

</html>    