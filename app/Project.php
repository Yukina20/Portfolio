<?php

namespace app;

// Assurez-vous d'inclure le fichier Database.php
require_once __DIR__ . '/../../config/Database.php';

use Config\Database;
use PDO;

// Utilisation de la bonne casse pour le namespace
// Importer la classe PDO

class Project {
    private $conn; // Connexion à la base de données

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection(); // Obtenez la connexion
    }

    public function getAllProjects() {
        $stmt = $this->conn->prepare("SELECT * FROM projects"); // Utilisez $this->conn ici
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupérer tous les résultats
    }
}
