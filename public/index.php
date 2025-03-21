<?php
require_once '../config/db.php';
require_once '../src/Controller/PieceController.php';

use App\Controller\PieceController;

// Initialisation du contrôleur
$controller = new PieceController();

// Vérification de l'action GET et appel de la méthode correspondante
$action = isset($_GET['action']) ? $_GET['action'] : 'afficherListe';

switch ($action) {
    case 'ajouterPiece':
        // Afficher le formulaire pour ajouter une pièce
        include 'ajouter_piece.php';
        break;

    case 'afficherListe':
    default:
        // Afficher la liste des pièces
        $controller->afficherListe($pdo);
        break;
}
