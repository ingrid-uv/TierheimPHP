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

    echo "Tierart: " . $_POST["tierart"] . "<br>";
    echo "Tiercode: " . $_POST["animalCode"] . "<br>";    
    echo "Vorname: " . $_POST["fname"] . "<br>";
    echo "Nachname: " . $_POST["nname"] . "<br>";
    echo "E-Mail: " . $_POST["email"] . "<br>";
    echo "Telefon: " . $_POST["tel"] . "<br>";    
    echo "Adresse: " . $_POST["adresse"] . "<br>";
    echo "Hausnummer: " . $_POST["hnum"] . "<br>";
    echo "Stadt: " . $_POST["stadt"] . "<br>";
    echo "PLZ: " . $_POST["plz"] . "<br>";    
    echo "Land: " . $_POST["land"] . "<br>";
    echo "Nachricht: " . $_POST["nachricht"];

    if(isset($_POST["gesendet"]))
    {
        $con = mysqli_connect("", "root", "janina");
        mysqli_select_db($con, "tierheim");

        $sql = "INSERT INTO kontaktformular(animal, animalID, vorname, nachname, email, telefonnummer, adresse, hausnummer, stadt, plz, land, nachricht) values(' " . $_POST["tierart"] . "', '"
        . $_POST["animalCode"] . "', '" . $_POST["fname"] . "', '" . $_POST["nname"] . "', '" . $_POST["email"] . "', '" . $_POST["tel"] . "', '" . $_POST["adresse"] . "', ' " . $_POST["hnum"] . "', '"
        . $_POST["stadt"] . "', '" . $_POST["plz"] . "', '" . $_POST["land"] . "', '" . $_POST["nachricht"] . "')";

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