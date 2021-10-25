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

        <ul class="navBar" id="navbar">
      <li><a class="active" href="AnimalShelter.html">HOME</a></li>
      <li class="dropdown"><a class="dropbtn">ÜBER UNS</a>
        <div class="dropdown-content">
          <a href="#">Über das Tierheim</a>
          <a href="Adopt.html">Tiere adoptieren</a>
          <a href="#">Mitmachen</a>
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
      <li class="dropdown"><a class="dropbtn" href="Einloggen.html">EINLOGGEN</a>
      </li>
    </ul>

        <div class="contentColumn">

            <?php
            $con = mysqli_connect("", "root", "janina");
            mysqli_select_db($con, "tierheim");
            $res = mysqli_query($con, "SELECT * FROM hunde");
            $num = mysqli_num_rows($res);
            if($num > 0) echo "Ergebnis:<br>";
            else         echo "Keine Ergebnisse<br>";
            $i = 0;
            while ($dsatz = mysqli_fetch_assoc($res))
            {
               $dogName = $dsatz["HundName"];
               $dogCode = $dsatz["HundCode"]; 
               $dogGeburtstag = $dsatz["HundGeburtstag"];
               $dogAnkunft = $dsatz["HundAnkunft"];
               $dogGeschlecht = $dsatz["HundGeschlecht"];
               $dogRasse = $dsatz["HundRasse"];
               $dogCharakter = $dsatz["HundCharakter"];
               $dogGesundheitszustand = $dsatz["HundGesundheit"];
               $dogHerkunft = $dsatz["HundHerkunft"];
               $dogBeschreibung = $dsatz["HundBeschreibung"];        
                          
            

           echo "<div class='card2'>";
           echo "<p class='text2'>"; 
           echo "<img class='img2' style='Width:50%; margin-right:15px;' src='Pictures/Dog$i.jpg'>";
           echo "<b>Name:</b>  $dogName</br>";
                    echo "<b>Tiercode:</b> $dogCode</br>";
                    echo "<b>Geboren am:</b> $dogGeburtstag</br>";
                    echo "<b>Geschlecht:</b> $dogGeschlecht</br>";
                    echo "<b>Hier seit:</b>  $dogAnkunft</br>";
                    echo "<b>Rasse:</b> $dogRasse</br>";
                    echo "<b>Herkunft:</b> $dogHerkunft</br>";
                    echo "<b>Charakter:</b> $dogCharakter</br>";
                    echo "<b>Gesundheitszustand:</b>  $dogGesundheitszustand</br></br>";
                    echo "<b>Beschreibung:</b> $dogBeschreibung </p></div>";                      
                   
                    $i++;
        }
            ?>
        </div>

    </div>

    <footer>
        <h2>ANIMAL SHELTER: "Sunshine"</h2>
        <p>Autor: Ingrid Ugussi Vukman</p>
        <p>E-Mail: ingrid_ugussi_vukman@yahoo</p>
    </footer>

   
</body>

</html>