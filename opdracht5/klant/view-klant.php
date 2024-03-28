<?php
include 'klant.php';

$klant = new Klant(); 

$klantData = $klant->getAllKlant();

echo "<h1>Klantoverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Naam</th><th>Email</th><th>Actie</th></tr>";

foreach ($klantData as $row) {
    echo "<tr>";
    echo "<td>".$row['naam']."</td>";
    echo "<td>".$row['email']."</td>";

    echo "<td><a href='update-klant.php?id=".$row['klant_id']."'>edit</a> | <a href='delete-klant.php?id=".$row['klant_id']."'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>

