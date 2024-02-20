<?php
$pageTitle = 'Livraison';
require_once(__DIR__ . '/head.php');
?>

<form action="livraisonValide.php" method="POST">

    <div class="m-1">
        <label for="nom">Nom</label>
        <input type="text" name='nom'>
    </div>

    <div class="m-1">
        <label for="prenom">prenom</label>
        <input type="text" name='prenom'>
    </div>
    <div class="m-1">
        <label for="adresse">adresse</label>
        <input type="text" name='adresse'>
    </div>
    <div class="m-1">
        <label for="ville">ville</label>
        <input type="text" name='ville'>
    </div>
    <div class="m-1">
        <label for="postal">code postal</label>
        <input type="text" name='postal'>
    </div>
    <div class="m-1">
        <label for="pays">pays</label>
        <input type="text" name='pays'>
    </div>
    <div class="m-1">
        <label for="telephone">telephone</label>
        <input type="number" name='telephone'>
    </div>

    <button type='submit'>envoyer</button>

</form>

<?php require_once(__DIR__ . '/footer.php') ?>