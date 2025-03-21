<?php

namespace App\Controller;

use App\Model\Piece;

class PieceController {
    public function afficherListe($pdo) {
        $pieces = Piece::findAll($pdo);
        include __DIR__ . '/../View/PieceView.php';
    }

    public function ajouterPiece($pdo, $nom, $description) {
        if (Piece::create($pdo, $nom, $description)) {
            header('Location: /');
            exit();
        }
    }
}
