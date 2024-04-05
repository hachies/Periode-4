<?php
include 'db.php';

class Reservering {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant'); 
    }

    public function addReservering($klantID, $tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen) {
        $sql = "INSERT INTO reserveringen (Klant_ID, Tafel_ID, Datum, Tijd, Aantal_Personen, Opmerkingen) 
                VALUES (?, ?, ?, ?, ?, ?)";
        return $this->db->executeQuery($sql, array($klantID, $tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen)); 
    }

    public function getAllReservering() {
        $sql = "SELECT * FROM reserveringen";
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }

    public function updateReservering($klantID, $tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen) {
        $sql = "UPDATE reserveringen SET Tafel_ID=?, Datum=?, Tijd=?, Aantal_Personen=?, Opmerkingen=? WHERE Klant_ID=?";
        return $this->db->executeQuery($sql, array($tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen, $klantID));
    }

    public function deleteReservering($reservering_id) {
        $sql = "DELETE FROM reserveringen WHERE Reservering_ID = ?";
        return $this->db->executeQuery($sql, array($reservering_id));
    }
}
?>





