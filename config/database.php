<?php

namespace config; // Corrigez l'espace de noms pour être cohérent avec son utilisation

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost';
    private $db_name = 'portfolio';
    private $username = 'Yukina';
    private $password = ''; // Assurez-vous que ce mot de passe est correct
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }
}
