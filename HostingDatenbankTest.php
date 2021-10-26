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

    # Zugangsdaten
    $db_server = 'rdbms.strato.de';
    $db_benutzer = 'dbu955808';
    $db_passwort = 'Dinosaur983ABC';
    $db_name = 'dbs4541005'; # Verbindungsaufbau
    if(mysqli_connect($db_server, $db_benutzer, $db_passwort)) {
    echo 'Server-Verbindung erfolgreich, wähle Datenbank aus...
    ';
    if(mysqli_select_db($db_name)) {
    echo 'Datenbank erfolgreich ausgewält, alle Tests abgeschlossen.';
    }
    else {
    echo 'Die angegebene Datenbank konnte nicht ausgewählt werden, bitte die Eingabe prüfen!'; }
    }
    else {
    echo 'Verbindung nicht möglich, bitte Daten prüfen! ';
    echo 'MYSQL-Fehler: '.mysqli_error();
    }
    ?>

</body>

</html>