<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `bedrijven/portfolio`');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projecten</h1>
    <section class="place-list">
    <?php foreach($result as $row): ?>
    <article class="places-list__place">
        <h2><?php echo $row ['titel']; ?></h2>
        <figure class="places-list__photo" style="background-image: url(img/<?php echo $row ['foto'] ?>)"></figure>
        <header>
            <h3>Website</h3>
            <em>Musea</em>
        </header>
        <p>Een zelfgemaakte website over Japan</p>
    </article>
    <?php endforeach; ?>
    </section>
    
   
</body>
</html>