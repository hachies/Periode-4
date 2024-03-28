<?php
include 'db.php';

class Rekening {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addRekening($bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW) {
        $sql = "INSERT INTO rekening (bonnr, datum, tijd, tafel, afdeling, totaalbedrag, BTW) VALUES ('$bonnr', '$datum', '$tijd', '$tafel', '$afdeling', '$totaalbedrag', '$BTW')";
        return $this->db->executeQuery($sql);
    }
}
?>


