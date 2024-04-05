<?php
include 'klant.php';

$klant = new Klant(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $deletedRows = $klant->deleteKlant($_POST['delete_id']);
    
    if ($deletedRows) {
        echo "Klant succesvol verwijderd.";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van de klant.";
    }
}

$klantData = $klant->getAllKlant();

echo "<h1>Klantoverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Naam</th><th>Email</th><th>Actie</th></tr>";

foreach ($klantData as $row) {
    echo "<tr>";
    echo "<td>".$row['naam']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td><a href='edit-klant.php?id=".$row['klant_id']."'>edit</a> | 
          <form method='POST' style='display:inline;'>
          <input type='hidden' name='delete_id' value='".$row['klant_id']."'>
          <button type='submit' style='background:none; border:none; padding:0; color:blue; text-decoration:underline; cursor:pointer;'>delete</button>
          </form>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>
