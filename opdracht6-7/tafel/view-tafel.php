<?php
include 'tafel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $tafel = new Tafel();
    $deletedRows = $tafel->deleteTafels($_POST['delete_id']);
    
    if ($deletedRows === false) {
        echo "Er is een fout opgetreden bij het verwijderen van de tafel.";
    } else {
        echo "Tafel succesvol verwijderd.";
    }
}

$tafel = new Tafel();
$data = $tafel->getAllTafels();

echo "<h1>Tafeloverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Tafel ID</th><th>Tafelnummer</th><th>Bezonderheden</th><th>Max Aantal Personen</th><th>Actie</th></tr>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row['Tafel_ID']."</td>";
    echo "<td>".$row['Tafel_Nummer']."</td>";
    echo "<td>".$row['Bezonderheden']."</td>";
    echo "<td>".$row['Max_Aantal_Personen']."</td>";
    echo "<td><a href='edit-tafel.php?id=".$row['Tafel_ID']."'>edit</a> | 
          <form method='POST' style='display:inline;'>
          <input type='hidden' name='delete_id' value='".$row['Tafel_ID']."'>
          <button type='submit'>delete</button>
          </form>
          </td>"; 
    echo "</tr>";
}
echo "</table>";

?>
        <a href="insert-tafel.php">nieuwe toevoegen</a>






