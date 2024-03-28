<?php
include 'rekening.php';

$rekening = new Rekening();

$data = $rekening->getAllRekening();

echo "<h1>Rekeningoverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Bonnr</th><th>Datum</th><th>Tijd</th><th>Tafel</th><th>Afdeling</th><th>Totaalbedrag</th><th>BTW</th><th>Actie</th></tr>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".(isset($row['Bonnr']) ? $row['Bonnr'] : "")."</td>";
    echo "<td>".(isset($row['Datum']) ? $row['Datum'] : "")."</td>";
    echo "<td>".(isset($row['Tijd']) ? $row['Tijd'] : "")."</td>";
    echo "<td>".(isset($row['Tafel']) ? $row['Tafel'] : "")."</td>";
    echo "<td>".(isset($row['Afdeling']) ? $row['Afdeling'] : "")."</td>";
    echo "<td>".(isset($row['Totaalbedrag']) ? $row['Totaalbedrag'] : "")."</td>";
    echo "<td>".(isset($row['BTW']) ? $row['BTW'] : "")."</td>";
    echo "<td><a href='update-rekening.php?id=".($row['Bonnr'] ?? "")."'>edit</a> | <a href='delete-rekening.php?id=".($row['Bonnr'] ?? "")."'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>


