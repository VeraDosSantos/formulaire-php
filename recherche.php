<?php
$pageTitle = 'Recherche';
require_once(__DIR__ . '/head.php');
?>
<form action="rechercheResultat.php" class="col-lg-6 offset-lg-3 ">
    <div class="row justify-content-center">
        <div class="mb-3">
            <label for="recherche">Recherche</label>
            <input type="search" name="recherche" id="recherche">
        </div>
        <div class="mb-3">
            <label for="rechercheGlobale">recherche globale</label>
            <input type="checkbox" name="rechercheGlobale" id="rechercheGlobale" value="1">
        </div>
        <div class="mb-3">
            <select name="tri" id="tri">
                <option value="categorie">Par categorie</option>
                <option value="nom">Par nom</option>
                <option value="date">Par date</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Rechercher</button>
    </div>

</form>

<?php require_once(__DIR__ . "/footer.php") ?>