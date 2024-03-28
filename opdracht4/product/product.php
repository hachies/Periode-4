<?php
include 'db.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addProduct($naam, $omschrijving, $prijs) {

        $sql = "INSERT INTO product (Naam, Omschrijving, Prijs) VALUES ('$naam', '$omschrijving', '$prijs')";
        return $this->db->executeQuery($sql);
    }
}
?>


