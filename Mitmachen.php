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

    echo " $password_visibile";

    $password_codificata = md5($password_visibile);

    echo " $password_codificata<br>";

  
    echo "Vorname: " . $_POST["fname"] . "<br>";
    echo "Nachname: " . $_POST["nname"] . "<br>";
    echo "E-Mail: " . $_POST["email"] . "<br>";
    echo "Passwort: " . $_POST["pass"] . "<br>";
    echo "Telefon: " . $_POST["tel"] . "<br>";    
    echo "Adresse: " . $_POST["adresse"] . "<br>";  
    echo "Stadt: " . $_POST["stadt"] . "<br>";
    echo "PLZ: " . $_POST["plz"] . "<br>";    
    echo "Land: " . $_POST["land"] . "<br>";

    if(isset($_POST["gesendet"]))
    {
        $con = mysqli_connect("", "root", "janina");
        mysqli_select_db($con, "tierheim");

        $sql = "INSERT INTO registrierungsformular(vorname, nachname, email, passwort, telefonnummer, adresse, stadt, plz, land) values('" . $_POST["fname"] . "', '" . $_POST["nname"] . "', '" . $_POST["email"] . "', '" .  $password_codificata . "', '" . $_POST["tel"] . "', '" . $_POST["adresse"] . "',  '"
        . $_POST["stadt"] . "', '" . $_POST["plz"] . "', '" . $_POST["land"] . "')";

        echo "SQL Query: $sql";

        mysqli_query($con, $sql);

        $num = mysqli_affected_rows($con);
        if ($num>0)
        {
            echo "<p><font color='#00aa00'>";
            echo "Ein Datensatz hinzugekommen";
            echo "</font></p>";
        }
        else
        {
            echo "<p><font color='#ff0000'>";
            echo "Es ist ein Fehler aufgetreten, ";
            echo "es ist kein Datensatz hinzugekommen";
            echo "</font></p>";
            echo("Error description: " . $con -> error);
        }

        mysqli_close($con);


    }
  
?>  


</body>

</html>  