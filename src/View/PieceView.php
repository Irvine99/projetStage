<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des pièces</title>
    <link href="/public/css/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-5">
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

        <a href="ajouter_piece.php" class="bg-blue-500 text-white p-2 rounded mt-5 inline-block">Ajouter une pièce</a>
    </div>
</body>
</html>
