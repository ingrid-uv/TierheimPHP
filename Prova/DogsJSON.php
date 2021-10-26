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
            <li class="dropdown"><a class="dropbtn">ABOUT</a>
                <div class="dropdown-content">
                    <a href="#">About the shelter</a>
                    <a href="#">How to adopt a dog</a>
                    <a href="#">How to adopt a cat</a>
                </div>
            </li>
            <li class="dropdown"><a href="Grundschulkinder.html" class="dropbtn">ADOPT ME</a>
                <div class="dropdown-content">
                    <a href="Dogs.html">Dogs</a>
                    <a href="#">Cats</a>
                    <a href="#">Other animals</a>
                </div>
            </li>
            <li class="dropdown"><a class="dropbtn">ALREADY ADOPTED</a>
                <div class="dropdown-content">
                    <a href="Memory.html">2021</a>
                    <a href="#">Calender</a>
                    <a href="#">Gallery</a>
                </div>
            </li>
        </ul>




        <div class="contentColumn">

            <?php

            $string_to_decode = file_get_contents("Dogs.json");
            $array_of_objects = json_decode($string_to_decode);         
            $arrayLength = count($array_of_objects);

            for($i=0; $i < $arrayLength; $i++){    
                           
            $dogName = $array_of_objects[$i]->name;
            $dogCode = $array_of_objects[$i]->tiercode;
            $dogGeburtstag = $array_of_objects[$i]->geburtstag;
            $dogGeschlecht = $array_of_objects[$i]->geschlecht;
            $dogAnkunft = $array_of_objects[$i]->ankunft;
            $dogRasse = $array_of_objects[$i]->rasse;
            $dogHerkunft = $array_of_objects[$i]->herkunft;
            $dogCharakter = $array_of_objects[$i]->charakter;
            $dogGesundheitszustand = $array_of_objects[$i]->gesundheitszustand;
            $dogBeschreibung= $array_of_objects[$i]->beschreibung;

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
                $arrayLength2 = count($dogBeschreibung); 
                    echo "<b>Beschreibung:</b>";  
                    for($j=0; $j < $arrayLength2; $j++){        
                    echo "$dogBeschreibung[$j]";
                    }
                    echo "</p></div>"; 
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