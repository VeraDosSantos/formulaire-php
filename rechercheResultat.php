<?php
$pageTitle = 'Resultat';
require_once(__DIR__ . '/head.php');
?>
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

<?php require_once(__DIR__ . "/footer.php") ?>