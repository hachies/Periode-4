<?php
include 'klant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    $klant = new Klant();
    $result = $klant->updateKlant($naam, $email);

    if ($result !== false) {
        echo "De klantgegevens zijn succesvol bijgewerkt!";
    } else {
        echo "Er is een fout opgetreden bij het bijwerken van de klantgegevens.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bewerk Klant</title>
</head>
<body>
    <h1>Bewerk Klant</h1>
    <form method="POST">
        <label for="email">Email van de klant:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <label for="naam">Naam van de klant:</label><br>
        <input type="text" id="naam" name="naam"><br><br>
        <input type="submit" value="Bijwerken"> <!-- Changed button text -->
    </form>
</body>
</html>

