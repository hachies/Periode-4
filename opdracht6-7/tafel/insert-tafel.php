<?php
include 'tafel.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tafelnummer = $_POST['tafelnummer'];
    $bezonderheden = $_POST['bezonderheden'];
    $max_aantal_personen = $_POST['max_aantal_personen'];
    
    $tafel = new Tafel();
    $result = $tafel->addTafels($tafelnummer, $bezonderheden, $max_aantal_personen); 

    if ($result) {
        echo "Tafelgegevens succesvol bijgewerkt!";
    } else {
        echo "Er is een fout opgetreden bij het bijwerken van de tafelgegevens.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tafel Toevoegen</title>
</head>
<body>
    <h2>Tafel Toevoegen</h2>
    <form action="" method="post">
        
        <label for="tafelnummer">Tafel Nummer:</label><br>
        <input type="number" id="tafelnummer" name="tafelnummer" required><br><br>
        
        <label for="bezonderheden">Bezonderheden:</label><br>
        <input type="text" id="bezonderheden" name="bezonderheden"><br><br>
        
        <label for="max_aantal_personen">Max Aantal Personen:</label><br>
        <input type="number" id="max_aantal_personen" name="max_aantal_personen" required><br><br>
        
        <input type="submit" value="Toevoegen">
        <a href="view-tafel.php">Terug</a>
    </form>
</body>
</html>
