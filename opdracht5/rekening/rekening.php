<?php
include 'db.php';

class Rekening {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addRekening($bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW) {
        $sql = "INSERT INTO rekeningen (Bonnr, Datum, Tijd, Tafel, Afdeling, Totaalbedrag, BTW) VALUES ('$bonnr', '$datum', '$tijd', '$tafel', '$afdeling', '$totaalbedrag', '$BTW')";
        return $this->db->executeQuery($sql);
    }

    public function getAllRekening() {
        $sql = "SELECT * FROM rekeningen";
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }
}
?>



