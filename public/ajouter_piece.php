<?php
require_once '../config/db.php';
require_once '../src/Controller/PieceController.php';

use App\Controller\PieceController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new PieceController();
    $controller->ajouterPiece($pdo, $_POST['nom'], $_POST['description']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une pièce</title>
    <link href="/public/css/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold">Ajouter une nouvelle pièce</h1>
        <form action="ajouter_piece.php" method="POST" class="mt-5">
            <input type="text" name="nom" placeholder="Nom de la pièce" class="p-2 border mb-3 w-full" required>
            <textarea name="description" placeholder="Description de la pièce" class="p-2 border mb-3 w-full" required></textarea>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Ajouter</button>
        </form>
    </div>
</body>
</html>
ddd