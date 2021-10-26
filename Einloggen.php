<?php
session_start();

session_destroy();
$_SESSION = array();

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

    <header>
        <p>Tel: 0176 31794576</h2>
    </header>
    <div class="notFooter">
      <div class="navBarAll">
        <ul class="navBar" id="navbar">
            <li><a class="active" href="AnimalShelter.html">HOME</a></li>
            <li class="dropdown"><a class="dropbtn">ÜBER UNS</a>
              <div class="dropdown-content">
                <a href="#">Über das Tierheim</a>
                <a href="Adopt.html">Tiere adoptieren</a>
                <a href="Mitmachen.html">Mitmachen</a>
              </div>
            </li>
            <li class="dropdown"><a href="Adopt.html" class="dropbtn">ADOPTION</a>
              <div class="dropdown-content">
                <a href="Dogs.php">Hunde</a>
                <a href="#">Katzen</a>
                <a href="#">Andere Tiere</a>
              </div>
            </li>
            <li class="dropdown"><a class="dropbtn">SCHON ADOPTIERT</a>
              <div class="dropdown-content">
                <a href="#">2021</a>
                <a href="#">Kalender</a>
                <a href="#">Galerie</a>
              </div>
            </li>
            <li class="dropdown"><a class="dropbtn" href="Einloggen.php">EINLOGGEN</a>
            </li>
          </ul>
          </div>

        <div class="contentColumn">
            </br>
            
            <div class="center">
                <h1>Einloggen nur für Mitglieder</h1>
                <form name="einloggen" action="Einloggen_2.php" method="post">
                <p><input name="fname" maxlength="30"> Benutzername</p>
                <p><input type="password" name="pass" maxlength="20"> Passwort</p>
                <p><input type="submit" value="Login"> <input type="reset"></p>
                </form>
            </div>
        </div>
        <footer>
            <h2>ANIMAL SHELTER: "Sunshine"</h2>
            <p>Autor: Ingrid Ugussi Vukman</p>
            <p>E-Mail: ingrid_ugussi_vukman@yahoo</p>
        </footer>

</body>

</html>