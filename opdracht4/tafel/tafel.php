<?php
include 'db.php';

class Tafel {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant'); 
    }

    public function addTafel($tafelnummer, $bezonderheden, $max_aantal_personen) {
        $sql = "INSERT INTO Tafel (Tafel_Nummer, Bezonderheden, Max_Aantal_Personen) 
                VALUES ('$tafelnummer', '$bezonderheden', '$max_aantal_personen')";
        return $this->db->executeQuery($sql); 
    }
}
?>


