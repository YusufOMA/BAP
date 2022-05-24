<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `portfolio`');

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
    <h1>Projecten</h1>
    <section class="place-list">
    <?php foreach($result as $row): ?>
    <article class="places-list__place">
        <h2><?php echo $row ['titel']; ?></h2>
        <figure class="places-list__photo" style="background-image: url(img/<?php echo $row ['foto'] ?>)"></figure>
        <header>
        <h2><?php echo $row ['prijs']; ?></h2>
        <h2><?php echo $row ['tekst']; ?></h2>
    </article>
    <?php endforeach; ?>
    </section>
    
   
</body>
</html>