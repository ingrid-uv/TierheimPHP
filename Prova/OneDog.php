<html>
    <head>
        <title>Tierheim "Sunshine"</title>
    </head>

    <body>
        <h1>Generic Gallery Page</h1>
        <?php

            $string_to_decode = file_get_contents("Dogs.json");
            $array_of_objects = json_decode($string_to_decode);
           
           
            // $names = array("Nala", "Frodo", "Arlo", "Ricki", "Nero&Lili", "Lana", "Chiara", "Aron", "Bella", "Teo", "Mia", "Oreo");
            $i = $_GET['pos'];
            $j=$i-1;    
            echo "Starting from $j<br>";        
            $dogName = $array_of_objects[$j]->name;
            $dogCode = $array_of_objects[$j]->tiercode;
            $dogGeburtstag = $array_of_objects[$j]->geburtstag;
            $dogGeschlecht = $array_of_objects[$j]->geschlecht;
            echo "First dog name is $dogName <br>";

            echo "<img src='Pictures/Dog$i.jpg' width='100' height='auto'><h2>Nome: $dogName<br>Tiercode:  $dogCode<br>Geburtstag:  $dogGeburtstag<br>Geschlecht:  $dogGeschlecht</h2><br>";           

        $k=$i+1;
       
                echo "<a href='OneDog.php?pos=$k'>Dog $k</a><br>";
            
           
   
        ?>
    </body>
</html>