<?php
include 'klant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $email = $_POST['email'];


    $klant = new Klant();
    $result = $klant->addKlant($naam, $email);

    if ($result) {
        echo "Een nieuwe klant is toegevoegd! welkom $naam";
    } else {
        echo "Er is een fout opgetreden, probeer opnieuw!.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>klant Toevoegen</title>
</head>
<body>
    <h2>Klant Toevoegen</h2>
    <form action="insert-klant.php" method="post">
        <label for="naam">naam van de klant:</label><br>
        <input type="text" id="naam" name="naam"><br><br>
        <label for="email">email van de klanten:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>

