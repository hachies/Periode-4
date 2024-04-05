<?php
include 'klant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    $klant = new Klant();
    $result = $klant->addKlant($naam, $email);

    if ($result) {
        echo "Een nieuwe klant is toegevoegd! Welkom $naam";
    } else {
        echo "Er is een fout opgetreden, probeer opnieuw!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Klant Toevoegen</title>
</head>
<body>
    <h2>Klant Toevoegen</h2>
    <form action="" method="post">
        <label for="naam">Naam van de klant:</label><br>
        <input type="text" id="naam" name="naam"><br><br>
        <label for="email">Email van de klant:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>


