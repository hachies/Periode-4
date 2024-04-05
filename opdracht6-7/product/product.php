<?php
include 'db.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addProduct($naam, $omschrijving, $prijs) {
        $sql = "INSERT INTO producten (naam, Omschrijving, Prijs) VALUES (?, ?, ?)";
        return $this->db->executeQuery($sql, array($naam, $omschrijving, $prijs));
    }

    public function getAllProduct() {
        $sql = "SELECT * FROM producten";
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }

    public function deleteProduct($product_id) {
        $sql = "DELETE FROM producten WHERE Product_ID = ?";
        return $this->db->executeQuery($sql, array($product_id));
    }

    public function updateProduct($product_id, $naam, $omschrijving, $prijs) {
        $sql = "UPDATE producten SET naam = ?, Omschrijving = ?, Prijs = ? WHERE Product_ID = ?";
        return $this->db->executeQuery($sql, array($naam, $omschrijving, $prijs, $product_id));
    }
}
?>





