<?php include '../src/View/head.php'; ?>

<div class="mt-5">
    <h1 class="text-2xl font-bold">Ajouter une nouvelle pièce</h1>
    <form action="?action=ajouterPiece" method="POST" class="mt-5">
        <input type="text" name="nom" placeholder="Nom de la pièce" class="p-2 border mb-3 w-full" required>
        <textarea name="description" placeholder="Description de la pièce" class="p-2 border mb-3 w-full" required></textarea>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Ajouter</button>
    </form>

    <div class="mt-5">
        <a href="?action=afficherListe" class="bg-gray-500 text-white p-2 rounded">Retour à la liste des pièces</a>
    </div>
</div>

<?php include '../src/View/script.php'; ?>
