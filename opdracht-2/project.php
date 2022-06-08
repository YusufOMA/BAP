<?php
require 'functions.php';
$connection = dbConnect();

// checken of id wel is mee gestuurd in de url
if( !isset($_GET['id']) ){
    echo "De id is niet gezet";
    exit;
}

// checken of het wel een getal is
$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal";
    exit;
}

$statement = $connection->prepare('SELECT * FROM `portfolio` WHERE id=?');
$params = [$id];
$statement->execute($params);
$projects = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bundels</title>
</head>
<body>
    <div class="container"></div>
        <h1>Projecten</h1>
        <section>
            <article class="place-info">
                <header>
                    <h2><?php echo $projects['titel']?></h2>
                    <h3><?php echo $projects['titel']?></h3>
                </header>
                <figure style="background-image: url(images/<?php echo $projects['foto']?>)">
                    <em>€<?php echo $projects['prijs']?></em>
                </figure>
                <p>
                <?php echo $projects['tekst']?>
                </p>
                <hr>
                <a href="index.php">Terug naar het overzicht</a>
            </article>
            <aside class="places-sidebar">
                <h3>Andere Sites</h3>
                <ul>
                    <li>Basic Pakket</li>
                    <li>Normal Pakket</li>
                    <li>Mater Pakket</li>
                </ul>
            </aside>
        </section>
        
    </div>

   
   
    
   
</body>
</html>