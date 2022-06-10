<?php
require 'functions.php';
$connection = dbConnect();

//checken of er gegevens zijn opgestuurd
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //gegevens tonen
    print_r($_POST);
    exit;
}

?>

<!DOCTYPE html>
<html class="form__alles" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulier</title>
</head>

<body>
    <div class="container"></div>
        <h1>Formulier</h1>
        <section class="contact">
            <header>
                <h2>Wil je contact opnemen?</h2>
            </header>
            <form>
                <form action="contact.php" method="POST">
                    <div class="form__field">
                        <label for="voornaam" class="form">Voornaam</label>
                        <input type="text" id="voornaam" name="voornaam" placeholder="Vul uw voornaam in" required>
                    </div>

                    <div class="form__field">
                        <label for="achternaam" class="form">Achternaam</label>
                        <input type="text" id="achternaam" name="achternaam" placeholder="Vul uw achternaam in" required />
                    </div>
                    <div class="form__field">
                        <label for="voornaam" class="form">E-mail</label>
                        <input type="email" id="email" name="Soort-pakket" placeholder="Vul uw email hier in" required />
                    </div>
                    <div class="form__field">
                        <label for="voornaam" class="form">Bericht</label>
                        <textarea type="bericht" id="bericht" name="contactgegevens" placeholder="Vul uw eventuele vragen hier in" required></textarea>
                    </div>
                    <button type="submit" class="form_button">Opsturen</button>
                </form>
            </form>

        </section>

        </div>





</body>

</html>