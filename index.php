<?php require_once(__DIR__ . "/variable.php");
require_once(__DIR__ . "/fonction.php");

//var_dump($users);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php require_once(__DIR__ . "/head.php") ?>
    <h1> Ma premiere page PHP</h1>

    <div class="container">
        <div class="row">
            <h2>Produits</h2>
            <?php getProducts($products); ?>
        </div>

        <div class="row">
            <h2>Utilisateurs</h2>
            <?php getUsers($users); ?>
        </div>
    </div>

    <?php require_once(__DIR__ . "/footer.php") ?>
</body>

</html>