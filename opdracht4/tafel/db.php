<?php

class DB {
    private $dbh;
    protected $stmt;

    public function __construct($db, $host = "localhost", $user = "root", $pass = "")
    {
        
        try {
            $this->dbh = new PDO("mysql:host=$host;dbname=$db;" , $user, $pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connectie fout: " . $e->getMessage());
        }
    }

    public function executeQuery($query, $params = array()) {
        try {
            $stmt = $this->dbh->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query fout: " . $e->getMessage());
        }
    }
    
}


$myDb = new DB('restaurant');
?>