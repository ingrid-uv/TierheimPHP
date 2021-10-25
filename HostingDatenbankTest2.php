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

    echo "Bitte warten!";

    $db_server = 'rdbms.strato.de';
    $db_benutzer = 'dbu955808';
    $db_passwort = 'Dinosaur983ABC';
    $db_name = 'dbs4541005';

    $mysqli = new mysqli($db_server,$db_benutzer,$db_passwort,$db_name);

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    // Perform a query, check for error
    if (!$mysqli -> query("INSERT INTO test (id) VALUES ('12345')")) {
    echo("Error description: " . $mysqli -> error);
    }

    $mysqli -> close();

    ?>

</body>

</html>