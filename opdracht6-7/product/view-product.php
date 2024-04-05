<?php
include 'product.php';

$product = new Product(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $deletedRows = $product->deleteProduct($_POST['delete_id']);
    
    if ($deletedRows) {
        echo "Product succesvol verwijderd.";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van het product.";
    }
}

$data = $product->getAllProduct();

echo "<h1>Productoverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Naam</th><th>Omschrijving</th><th>Prijs</th><th>Actie</th></tr>";

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row['naam']."</td>";
    echo "<td>".$row['Omschrijving']."</td>";
    echo "<td>".$row['Prijs']."</td>";
    echo "<td><a href='update-product.php?id=".$row['Product_ID']."'>edit</a> | 
          <form method='POST' style='display:inline;'>
          <input type='hidden' name='delete_id' value='".$row['Product_ID']."'>
          <button type='submit' style='background:none; border:none; padding:0; color:blue; text-decoration:underline; cursor:pointer;'>delete</button>
          </form>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>



