<?php
include 'rekening.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bonnr = $_POST['bonnr'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $tafel = $_POST['tafel'];
    $afdeling = $_POST['afdeling'];
    $totaalbedrag = $_POST['totaalbedrag'];
    $BTW = $_POST['BTW'];

    $rekening = new Rekening();
    $result = $rekening->addRekening($bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW);

    if ($result) {
        echo "Het is toegevoegd";
    } else {
        echo "Er is een fout opgetreden, probeer opnieuw.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rekening Toevoegen</title>
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
        
        <label for="afdeling">Afdeling van de klant:</label><br>
        <input type="text" id="afdeling" name="afdeling" required><br><br>
        
        <label for="totaalbedrag">Totaal bedrag van het rekening:</label><br>
        <input type="text" id="totaalbedrag" name="totaalbedrag" required><br><br>
        
        <label for="BTW">BTW van de rekening:</label><br>
        <input type="number" id="BTW" name="BTW" required><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
