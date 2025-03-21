<?php
// require_once '../config/db.php';
require_once '../src/Controller/AppController.php';

use App\Controller\AppController;

// Instanciation du contrôleur principal
$controller = new AppController();

// Récupérer l'action GET (par défaut 'afficherListe')
$action = isset($_GET['action']) ? $_GET['action'] : 'afficherListe';

// Route vers la méthode appropriée dans le contrôleur
$controller->router($action, $pdo);
