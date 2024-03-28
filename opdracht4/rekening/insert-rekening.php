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
        <label for="bonnr">bonnummer van de klant:</label><br>
        <input type="number" id="bonnr" name="bonnr"><br><br>
        
        <label for="datum">datum van de rekening:</label><br>
        <input type="date" id="datum" name="datum"><br><br>
        
        <label for="tijd">de tijd van het krijgen van de rekening:</label><br>
        <input type="time" id="tijd" name="tijd"><br><br>
        
        <label for="tafel">tafel van de klant:</label><br>
        <input type="number" id="tafel" name="tafel"><br><br>
        
        <label for="afdeling">afdeling van de klant:</label><br>
        <input type="text" id="afdeling" name="afdeling"><br><br>
        
        <label for="totaalbedrag">totaal bedrag van het rekening:</label><br>
        <input type="text" id="totaalbedrag" name="totaalbedrag"><br><br>
        
        <label for="BTW">btw van de rekening:</label><br>
        <input type="number" id="BTW" name="BTW"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>