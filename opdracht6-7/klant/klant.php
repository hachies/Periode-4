<?php
include 'db.php';

class Klant {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addKlant($naam, $email) {
        $sql = "INSERT INTO klanten (naam, email) VALUES (?, ?)";
        return $this->db->executeQuery($sql, array($naam, $email));
    }

    public function getAllKlant() {
        $sql = "SELECT * FROM klanten";
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }

    public function deleteKlant($klant_id) {
        $sql = "DELETE FROM klanten WHERE klant_id = ?";
        return $this->db->executeQuery($sql, array($klant_id));
    }

    public function updateKlant($klant_id, $naam, $email) {
        $sql = "UPDATE klanten SET naam = ?, email = ? WHERE klant_id = ?";
        return $this->db->executeQuery($sql, array($naam, $email, $klant_id));
    }
}
?>





