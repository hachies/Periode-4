<?php
include 'product.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $naam = $_POST['naam'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $product = new Product();

    $result = $product->updateProduct($product_id, $naam, $omschrijving, $prijs);

    if ($result) {
        echo "Product succesvol bewerkt!";
    } else {
        echo "Er is een fout opgetreden bij het bewerken van het product.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Bewerken</title>
</head>
<body>
    <h2>Product Bewerken</h2>
    <form action="" method="post">
        <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam"><br><br>
        <label for="omschrijving">Omschrijving:</label><br>
        <textarea id="omschrijving" name="omschrijving"></textarea><br>
        <label for="prijs">Prijs per stuk:</label><br>
        <input type="number" id="prijs" name="prijs"><br><br>
        <input type="submit" value="Bewerken">
    </form>
</body>
</html>
