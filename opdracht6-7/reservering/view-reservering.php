<?php
include 'reservering.php';

$reservering = new Reservering();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $deletedRows = $reservering->deleteReservering($_POST['delete_id']);
    
    if ($deletedRows) {
        echo "Reservering succesvol verwijderd.";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van de reservering.";
    }
}

$data = $reservering->getAllReservering();

echo "<h1>Reserveringsoverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Klant ID</th><th>Tafel Nummer</th><th>Datum</th><th>Tijd</th><th>Aantal Personen</th><th>Opmerkingen</th><th>Actie</th></tr>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row['Klant_ID']."</td>";
    echo "<td>".$row['Tafel_ID']."</td>";
    echo "<td>".$row['Datum']."</td>";
    echo "<td>".$row['Tijd']."</td>";
    echo "<td>".$row['Aantal_Personen']."</td>";
    echo "<td>".$row['Opmerkingen']."</td>";
    echo "<td><a href='edit-reservering.php?id=".$row['Reservering_ID']."'>edit</a> | 
          <form method='POST' style='display:inline;'>
          <input type='hidden' name='delete_id' value='".$row['Reservering_ID']."'>
          <button type='submit' style='background:none; border:none; padding:0; color:blue; text-decoration:underline; cursor:pointer;'>delete</button>
          </form>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>

