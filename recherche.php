<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php require_once(__DIR__ ."/head.php") ?>
    <form action="rechercheResultat.php" class="col-lg-6 offset-lg-3 " >
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
    
<?php require_once(__DIR__ ."/footer.php") ?>
</body>
</html>