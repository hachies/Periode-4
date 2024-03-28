<?php
include 'product.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['naam'], $_POST['omschrijving'], $_POST['prijs'])) {

        $naam = $_POST['naam'];
        $omschrijving = $_POST['omschrijving'];
        $prijs = $_POST['prijs'];

        $product = new Product();

        $result = $product->addProduct($naam, $omschrijving, $prijs);

        if ($result) {
            echo "Product toegevoegd!";
        } else {
            echo "Er is een fout opgetreden.";
        }
    } else {
        echo "Niet alle vereiste velden zijn ingevuld.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Toevoegen</title>
</head>
<body>
    <h2>Product Toevoegen</h2>
    <form action="" method="post">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam"><br><br>
        <label for="omschrijving">Omschrijving:</label><br>
        <textarea id="omschrijving" name="omschrijving"></textarea><br>
        <label for="prijs">Prijs per stuk:</label><br>
        <input type="number" id="prijs" name="prijs"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>





