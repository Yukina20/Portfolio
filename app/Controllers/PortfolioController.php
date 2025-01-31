<?php
namespace App\Controllers;

require_once __DIR__ . '/../Project.php';  // Chemin vers le modèle

use app\Project;

class PortfolioController {
    public function index() {
        // Définir des projets manuels
        $manualProjects = [
            ['name' => 'Site Web Personnel', 'description' => 'Un site web pour présenter mon portfolio.'],
            ['name' => 'Application To-Do', 'description' => 'Une application pour gérer des tâches.'],
            ['name' => 'Blog de Voyage', 'description' => 'Un blog pour partager mes expériences de voyage.']
        ];

        // Récupérer les projets depuis la base de données
        $projectModel = new Project();
        $databaseProjects = $projectModel->getAllProjects();

        // Fusionner les projets manuels et ceux de la base de données
        $projects = array_merge($manualProjects, $databaseProjects);

        // Passer la variable $projects à la vue
        require_once __DIR__ . '/../Views/portfolio.php';
    }
}
