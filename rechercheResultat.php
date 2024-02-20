<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php require_once(__DIR__ ."/head.php") ?>
    <h1>Page resultat de la recherche</h1>
    <?php if (!isset($_GET["recherche"])) { 
        echo "probleme";
    } else {
    ?>
        <div class="text-center">
            <h2>Contenu de recherche</h2>
            <p><?php echo $_GET["recherche"] ?></p>
        </div>
        <div class="text-center">
            <h2>Type de tri</h2>
            <p><?php echo $_GET["tri"] ?></p>
        </div>
        <div class="text-center">
            <h2>Recherche globale ?</h2>
            <p>
                <?php if (isset($_GET['globale'])) {
                    echo 'oui';
                } else {
                    echo 'non';
                } ?>
            </p>
        </div>
    <?php } ?>

<?php require_once(__DIR__ ."/footer.php") ?>
</body>
</html>