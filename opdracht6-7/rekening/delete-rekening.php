<?php
include 'rekening.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rekening_id'])) {
    $rekening_id = $_POST['rekening_id'];

    $rekening = new Rekening();

    $result = $rekening->deleteRekening($rekening_id);

    if ($result) {
        echo "Rekening succesvol verwijderd!";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van de rekening.";
    }
}
?>
