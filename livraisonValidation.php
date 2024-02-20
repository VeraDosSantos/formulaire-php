<?php
$pageTitle = 'Validation livraison';
require_once(__DIR__ . '/head.php');
?>
<h1>Validation du formulaire de livraison</h1>

<?php if (
    !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['adresse']) || !isset($_POST['postal']) || !isset($_POST['ville']) || !isset($_POST['pays']) || !isset($_POST['telephone']) ||
    empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['postal']) || empty($_POST['ville']) || empty($_POST['pays']) || empty($_POST['telephone'])
) {
    echo "<h2>Merci de remplir le formulaire</h2>";
} else {
?>

    <div>
        <h2>nom</h2>
        <?php echo $_POST['nom']; ?>
    </div>
    <div>
        <h2>prenom</h2>
        <?php echo $_POST['prenom']; ?>
    </div>
    <div>
        <h2>adresse</h2>
        <?php echo $_POST['adresse']; ?>
    </div>

    <div>
        <h2>ville</h2>
        <?php echo $_POST['ville']; ?>
    </div>

    <div>
        <h2>code postal</h2>
        <?php echo $_POST['postal']; ?>
    </div>

    <div>
        <h2>pays</h2>
        <?php echo $_POST['pays']; ?>
    </div>

    <div>
        <h2>telephone</h2>
        <?php echo $_POST['telephone']; ?>
    </div>

<?php } ?>

<?php require_once(__DIR__ . '/footer.php') ?>