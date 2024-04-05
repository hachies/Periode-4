<?php
include 'tafel.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tafelnummer = $_POST['tafelnummer'];
    $bezonderheden = $_POST['bezonderheden'];
    $max_aantal_personen = $_POST['max_aantal_personen'];
    $tafel_id = $_POST['tafel_id'];

    $tafel = new Tafel();

    $result = $tafel->updateTafels($tafelnummer, $bezonderheden, $max_aantal_personen, $tafel_id);

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerk Tafel</title>
</head>
<body>
    <h1>Bewerk Tafel</h1>
    <form method="POST">
        <input type="hidden" name="tafel_id" value="<?php echo $_GET['id']; ?>"> 
        <label for="tafelnummer">Tafel_Nummer:</label>
        <input type="text" id="tafelnummer" name="tafelnummer"><br><br>
        <label for="bezonderheden">Bezonderheden:</label>
        <input type="text" id="bezonderheden" name="bezonderheden"><br><br>
        <label for="max_aantal_personen">Max_Aantal_Personen:</label>
        <input type="text" id="max_aantal_personen" name="max_aantal_personen"><br><br>
        <input type="submit" value="Bewerken">
        <a href="view-tafel.php">Terug</a>
    </form>
</body>
</html>



