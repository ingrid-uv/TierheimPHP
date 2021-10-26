<html>
    <head>
        <title>Tierheim "Sunshine"</title>
    </head>

    <body>
      <h1>Under construction!</h1>
    <a href="Gallery1.php">First Gallery</a>
    <a href="Gallery2.php">Second Gallery</a>
    <a href="Gallery.php?start=3&end=7">Generic Gallery</a>
    <?php
    for($i=1; $i<=12; $i++ ){
    echo "<a href='OneDog.php?pos=$i'>Dog $i</a><br>";
    }
    
    ?>
    </body>
</html>