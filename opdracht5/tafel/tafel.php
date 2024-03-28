<?php
include 'db.php';

class Tafel {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant'); 
    }

    public function addTafels($tafelnummer, $bezonderheden, $max_aantal_personen) {
        $sql = "INSERT INTO tafels (Tafel_Nummer, Bezonderheden, Max_Aantal_Personen) VALUES (?, ?, ?)";
        return $this->db->executeQuery($sql, array($tafelnummer, $bezonderheden, $max_aantal_personen));
    }

    public function getAllTafel() {
        $sql = "SELECT Tafel_ID, Tafel_Nummer, Bezonderheden, Max_Aantal_Personen FROM tafels";
        $stmt = $this->db->executeQuery($sql);
        return $this->db->fetchAll($stmt);
    }
}
?>




