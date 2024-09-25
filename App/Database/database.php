<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'gestion_depenses';
    private $username = 'root';
    private $password = '';
    public $db;

    // dbexion à la base de données
    public function getdbection() {
        $this->db = null;

        try {
            $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Erreur de dbexion: " . $exception->getMessage();
        }

        return $this->db;
    }
}



?>
