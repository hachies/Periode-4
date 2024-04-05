<?php
include 'tafel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tafel_id'])) {
    $tafel_id = $_POST['tafel_id'];

    $tafel = new Tafel();

    $result = $tafel->deleteTafels($tafel_id);

    if ($result) {
        echo "Tafel succesvol verwijderd!";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van de tafel.";
    }
}
?>



