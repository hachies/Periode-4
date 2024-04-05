<?php
include 'db.php';

class Rekening {
    private $db;

    public function __construct() {
        $this->db = new DB('restaurant');
    }

    public function addRekening($bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW) {
        $sql = "INSERT INTO rekeningen (Bonnr, Datum, Tijd, Tafel, Afdeling, Totaalbedrag, BTW) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        return $this->db->executeQuery($sql, array($bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW));
    }

    public function getAllRekening() {
        $sql = "SELECT * FROM rekeningen";
        return $this->db->fetchAll($this->db->executeQuery($sql));
    }

    public function deleteRekening($rekening_id) {
        $sql = "DELETE FROM rekeningen WHERE Bonnr = ?";
        return $this->db->executeQuery($sql, array($rekening_id));
    }

    public function updateRekening($rekening_id, $bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW) {
        $sql = "UPDATE rekeningen SET Bonnr = ?, Datum = ?, Tijd = ?, Tafel = ?, Afdeling = ?, Totaalbedrag = ?, BTW = ? 
                WHERE Bonnr = ?";
        return $this->db->executeQuery($sql, array($bonnr, $datum, $tijd, $tafel, $afdeling, $totaalbedrag, $BTW, $rekening_id));
    }
}
?>
