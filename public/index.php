<?php


// Démarrer la session si nécessaire
session_start();

// Chemin vers le contrôleur
require_once __DIR__ . '/../app/Controllers/PortfolioController.php'; // Modifiez le chemin si nécessaire

use App\Controllers\PortfolioController;

// Créer une instance du contrôleur
$controller = new PortfolioController();

// Appeler la méthode index pour afficher le portfolio
$controller->index();
?>
