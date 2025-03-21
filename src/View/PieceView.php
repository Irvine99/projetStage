<?php include './module/head.php'; ?>

<div class="mt-5">
    <h1 class="text-2xl font-bold">Liste des pièces</h1>
    <table class="min-w-full table-auto mt-5">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pieces as $piece): ?>
                <tr>
                    <td class="border px-4 py-2"><?= $piece->getId() ?></td>
                    <td class="border px-4 py-2"><?= $piece->getNom() ?></td>
                    <td class="border px-4 py-2"><?= $piece->getDescription() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="mt-5">
        <a href="?action=ajouterPiece" class="bg-blue-500 text-white p-2 rounded">Ajouter une pièce</a>
    </div>
</div>

<?php include './module/script.php'; ?>
