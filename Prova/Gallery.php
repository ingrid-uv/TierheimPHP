<html>
    <head>
        <title>Tierheim "Sunshine"</title>
    </head>

    <body>
      <h1>Generic Gallery Page</h1>
      <?php
      $names = array("Nala", "Frodo", "Arlo", "Ricki", "Nero&Lili", "Lana", "Chiara", "Aron", "Bella", "Teo", "Mia", "Oreo");
       $start = $_GET['start'];
       $end = $_GET['end'];
       echo "Starting from $start";
       echo "Ending at $end<br>";

       for ($i=$start; $i<=$end; $i++)
       {
           $j=$i-1;
           echo "<img src='Pictures/Dog$i.jpg' width='100' height='auto'><h2>Nome: $names[$j]</h2><br>";
       }
      
   
     ?>
    </body>
</html>