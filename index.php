<?php
$pageTitle = 'Cours 2 en PHP';
require_once(__DIR__ . '/head.php');
require_once(__DIR__ . "/variable.php");
require_once(__DIR__ . "/fonction.php");
//var_dump($users);
?>

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