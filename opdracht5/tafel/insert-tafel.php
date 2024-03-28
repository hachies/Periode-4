<?php
include 'tafel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['tafelnummer'], $_POST['bezonderheden'], $_POST['max_aantal_personen'])) {
        $tafelnummer = $_POST['tafelnummer'];
        $bezonderheden = $_POST['bezonderheden'];
        $max_aantal_personen = $_POST['max_aantal_personen'];

        $tafels = new Tafel(); 

        $result = $tafels->addTafels($tafelnummer, $bezonderheden, $max_aantal_personen);

        if ($result) {
            echo "De tafel is toegevoegd.";
        } else {
            echo "Er is een fout opgetreden, probeer opnieuw.";
        }
    } else {
        echo "Niet alle vereiste velden zijn ingevuld.";
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
    </form>
</body>
</html>
