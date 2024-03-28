<?php
include 'tafel.php';

$tafel = new Tafel();

$data = $tafel->getAllTafel();

echo "<h1>Tafeloverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Tafel ID</th><th>Tafelnummer</th><th>Bezonderheden</th><th>Max Aantal Personen</th><th>Actie</th></tr>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row['Tafel_ID']."</td>";
    echo "<td>".$row['Tafel_Nummer']."</td>";
    echo "<td>".$row['Bezonderheden']."</td>";
    echo "<td>".$row['Max_Aantal_Personen']."</td>";
    echo "<td><a href='update-tafel.php?id=".$row['Tafel_ID']."'>edit</a> | <a href='delete-tafel.php?id=".$row['Tafel_ID']."'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
