<?php

namespace App\Controller;

class AppController


{
    // Homepage
    public function login()
    {
        include '../src/View/login.php';
    }

    // Affiche la page de la liste des pièces


    // Affiche la page pour ajouter une nouvelle pièce
    public function afficherFormulaireAjout()
    {
        include '../src/View/ajouter_piece.php';
    }

    // Traitement du formulaire d'ajout de pièce
    public function ajouterPiece($pdo, $nom, $description)
    {
        $pieceController = new PieceController();
        $pieceController->ajouterPiece($pdo, $nom, $description);
        header('Location: /public/?action=afficherListe');
        exit();
    }

    // Fonction pour générer la vue selon l'action
    public function router($action, $pdo)
    {
        switch ($action) {
            case 'ajouterPiece':
                $this->afficherFormulaireAjout();
                break;
            
            case 'afficherListe':
            default:
                $this->login();
                break;
        }
    }
}
