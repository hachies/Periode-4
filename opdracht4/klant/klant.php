<?php
include 'db.php';

class Klant {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addKlant($naam, $email) {
        $sql = "INSERT INTO klant (naam, email) VALUES ('$naam', '$email')";
        return $this->db->executeQuery($sql);
    }
}
?>