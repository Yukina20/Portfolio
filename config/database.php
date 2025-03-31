<?php
// Inclure le fichier de connexion à la base de données
require_once 'config/Database.php';

use config\Database;

// Créer une instance de la classe Database
$database = new Database();

// Obtenir la connexion à la base de données
$conn = $database->getConnection();

// Vérifier si la connexion est réussie
if ($conn === null) {
    die("Erreur de connexion à la base de données.");
}

// Requête pour récupérer les projets
$query = "SELECT title, description, link FROM projects";  // Assurez-vous que la table 'projects' existe avec ces colonnes.

try {
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Récupérer tous les projets dans un tableau associatif
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des projets : " . $e->getMessage();
    exit;
}
?>
