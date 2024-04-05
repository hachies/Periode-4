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

    public function getAllTafels() {
        $sql = "SELECT * FROM tafels"; 
        $stmt = $this->db->executeQuery($sql); 
        return $this->db->fetchAll($stmt);
    }

    public function updateTafels($tafelnummer, $bezonderheden, $max_aantal_personen, $tafel_id) {
        $sql = "UPDATE tafels SET Tafel_Nummer=?, Bezonderheden=?, Max_Aantal_Personen=? WHERE Tafel_ID=?";
        return $this->db->executeQuery($sql, array($tafelnummer, $bezonderheden, $max_aantal_personen, $tafel_id));
    }

    public function deleteTafels($tafel_id) {
        $sql = "DELETE FROM tafels WHERE Tafel_ID = ?";
        return $this->db->executeQuery($sql, array($tafel_id));
    }
}
?>
