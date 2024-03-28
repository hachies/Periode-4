<?php
include 'db.php';

class Reservering {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant'); 
    }

    public function addReservering($klantID, $tafelID, $datum, $tijd, $aantalPersonen, $opmerkingen) {

$sql = "INSERT INTO reserveringen (Klant_ID, Tafel_ID, Datum, Tijd, Aantal_Personen, Opmerkingen) 
                VALUES ('$klantID', '$tafelID', '$datum', '$tijd', '$aantalPersonen', '$opmerkingen')";
        
        return $this->db->executeQuery($sql); 
    }

    public function getAllReservering() {
        $sql = "SELECT * FROM reserveringen";
        
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }
}
?>




