<?php
include 'db.php';

class Klant {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addKlant($naam, $email) {
        $sql = "INSERT INTO klanten (naam, email) VALUES ('$naam', '$email')";
        return $this->db->executeQuery($sql);
    }

    public function getAllKlant() {
        $sql = "SELECT * FROM klanten";
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }
}
?>
