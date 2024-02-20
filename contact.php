<?php
$pageTitle = 'Contact';
require_once(__DIR__ . '/head.php');
?>
<!--Dans action on indique le nom du fichier vers quoi le formulaire va être envoyé-->
<form action="contactValide.php" method="" class="col-lg-6 offset-lg-3 ">
    <div class="row justify-content-center">
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="message">Message: </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Envoyer</button>
    </div>
</form>
<?php require_once(__DIR__ . "/footer.php") ?>