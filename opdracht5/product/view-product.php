<?php
include 'product.php';

$product = new Product(); 
$Data = $product->getAllProduct();
echo "<h1>Productoverzicht</h1>";
echo "<table border='1'>";
echo "<tr><th>Naam</th><th>Omschrijving</th><th>Prijs</th><th>Actie</th></tr>";

foreach ($Data as $row) {
    echo "<tr>";
    echo "<td>".$row['naam']."</td>";
    echo "<td>".$row['Omschrijving']."</td>";
    echo "<td>".$row['Prijs']."</td>";

    echo "<td><a href='update-product.php?id=".$row['Product_ID']."'>edit</a> | <a href='delete-product.php?id=".$row['Product_ID']."'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>



