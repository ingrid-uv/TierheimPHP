<html>
    <head>
        <title>Tierheim "Sunshine"</title>
    </head>

    <body>
        <h1>Generic Gallery Page</h1>
        <?php

            $string_to_decode = file_get_contents("Dogs.json");
            $array_of_objects = json_decode($string_to_decode);         
            $arrayLength = count($array_of_objects);
           
            for($i=0; $i< $arrayLength; $i++){           
                           
            $dogName = $array_of_objects[$i]->name;
            $dogCode = $array_of_objects[$i]->tiercode;
            $dogGeburtstag = $array_of_objects[$i]->geburtstag;
            $dogGeschlecht = $array_of_objects[$i]->geschlecht;
            

            echo "<img src='Pictures/Dog$i.jpg' width='100' height='auto'><h2>Nome: $dogName<br>Tiercode:  $dogCode<br>Geburtstag:  $dogGeburtstag<br>Geschlecht:  $dogGeschlecht</h2><br>";           
          
            
           }
   
        ?>
    </body>
</html>