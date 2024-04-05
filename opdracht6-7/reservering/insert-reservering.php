<?php
include 'reservering.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klantID = $_POST['klantID'];
    $tafelID = $_POST['tafelID'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $aantalPersonen = $_POST['aantalPersonen'];
    $opmerkingen = $_POST['opmerkingen'];

    $reservering = new Reservering();

    $result = $reservering->addReservering($klantID, $tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen);

    if ($result) {
        echo "De reservering is toegevoegd.";
    } else {
        echo "Er is een fout opgetreden, probeer opnieuw.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservering Toevoegen</title>
</head>
<body>
    <h2>Reservering Toevoegen</h2>
    <form action="" method="post">
        <label for="klantID">Klant ID:</label><br>
        <input type="number" id="klantID" name="klantID" required><br><br>
        
        <label for="tafelID">Tafel ID:</label><br>
        <input type="number" id="tafelID" name="tafelID" required><br><br>
        
        <label for="datum">Datum:</label><br>
        <input type="date" id="datum" name="datum" required><br><br>
        
        <label for="tijd">Tijd:</label><br>
        <input type="time" id="tijd" name="tijd" required><br><br>
        
        <label for="aantalPersonen">Aantal Personen:</label><br>
        <input type="number" id="aantalPersonen" name="aantalPersonen" required><br><br>
        
        <label for="opmerkingen">Opmerkingen:</label><br>
        <input type="text" id="opmerkingen" name="opmerkingen"><br><br>
        
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>


