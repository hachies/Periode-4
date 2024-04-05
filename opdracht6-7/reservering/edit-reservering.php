<?php
include 'reservering.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klantID = $_POST['bonnr'];
    $tafelID = $_POST['tafel'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $aantalPersonen = $_POST['aantalPersonen'];
    $opmerkingen = $_POST['opmerkingen']; 

    $reservering = new Reservering();

    $result = $reservering->updateReservering($klantID, $tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen);
    
    if ($result) {
        echo "De reservering is bijgewerkt.";
    } else {
        echo "Er is een fout opgetreden, probeer opnieuw.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerk Tafel</title>
</head>
<body>
    <h2>Rekening Toevoegen</h2>
    <form action="" method="post">
        <label for="bonnr">Bonnummer van de klant:</label><br>
        <input type="number" id="bonnr" name="bonnr" required><br><br>
        
        <label for="datum">Datum van de rekening:</label><br>
        <input type="date" id="datum" name="datum" required><br><br>
        
        <label for="tijd">Tijd van het krijgen van de rekening:</label><br>
        <input type="time" id="tijd" name="tijd" required><br><br>
        
        <label for="tafel">Tafel van de klant:</label><br>
        <input type="number" id="tafel" name="tafel" required><br><br>
        
        <label for="aantalPersonen">Aantal personen:</label><br>
        <input type="number" id="aantalPersonen" name="aantalPersonen" required><br><br>
        
        <label for="opmerkingen">Opmerkingen:</label><br>
        <textarea id="opmerkingen" name="opmerkingen"></textarea><br><br>
        
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>

