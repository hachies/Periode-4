<?php
include 'reservering.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reservering_id'])) {
    $reservering_id = $_POST['reservering_id'];

    $reservering = new Reservering();

    $result = $reservering->deleteReservering($reservering_id);

    if ($result) {
        echo "Reservering succesvol verwijderd!";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van de reservering.";
    }
}
?>

