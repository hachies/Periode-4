<?php
include 'product.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    $product = new Product();

    $result = $product->deleteProduct($product_id);

    if ($result) {
        echo "Product succesvol verwijderd!";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van het product.";
    }
}
?>
