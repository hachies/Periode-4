<?php
include 'reservering.php';

$reservering = new Reservering();

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
    echo "<td><a href='update-reservering.php?id=".$row['Reservering_ID']."'>edit</a> | <a href='delete-reservering.php?id=".$row['Reservering_ID']."'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>

