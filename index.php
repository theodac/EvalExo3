<?php
include ("./functions/connectionPDO.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Ajouter un film a la base de données : </h2>
<form method="post" action="index.php" name="formulaire">
    <label>Titre : </label>
    <input type="text" name="titre">
    <br>
    <label>Acteur : </label>
    <input type="text" name="acteurs">
    <br>
    <label>Réalisateur : </label>
    <input type="text" name="realisateur">
    <br>
    <label>Producteur : </label>
    <input type="text" name="producteur">
    <br>

    <label>Année de production : </label>
    <select name="annee">
        <?php
        $anneeActuelle = date("Y") +1 ;

        while ($anneeActuelle >= 1960){
            $anneeActuelle--;
            echo "<option value='$anneeActuelle'>" . $anneeActuelle . "</option>";
        }

        ?>

    </select>
    <br>
    <label>Language : </label>
    <select name="toto">
        <option value="0" selected>Francais</option>
        <option value="1">Anglais</option>
        <option value="2">Espagnole</option>
        <option value="3">Allemand</option>
        <option value="4">Russe</option>
    </select>
    <br>
    <label>Categorie</label>
    <select name="categorie">



        <option value="action" >Action</option>
        <option value="animation">Animation</option>
        <option value="aventure">Aventure</option>
        <option value="comedie">Comedie</option>
        <option value="dramatique">Dramatique</option>
        <option value="horreur">Horreur</option>
        <option value="fantastique">Fantastique</option>
        <option value="guerre">Guerre</option>
        <option value="historique">Historique</option>
        <option value="policier" >Policier</option>
        <option value="thriller">Thriller</option>
        <option value="SF" >Science-Fiction</option>

    </select>
    <br>
    <label>Synopsis : </label>
    <input type="text" name="synopsis">
    <br>
    <label>Lien vers une bande-annonce : </label>
    <input type="url" name="video">
    <input type="submit" name="envoi">
</form>
<?php
if (isset($_POST['envoi'])){
    $tabErreur = array();
    $titre = $_POST['titre'];
    $acteur = $_POST['acteurs'];
    $realisateur = $_POST['realisateur'];
    $producteur = $_POST['producteur'];
    $synopsis = $_POST['synopsis'];
    $url = $_POST['video'];
    $anneeeProd = $_POST['annee'];

    $categorie = $_POST['categorie'];


    if (strlen($titre) < 5  ){

        array_push($tabErreur,"Votre champs doit contenir au moins 5 caractères");
    }
    if (strlen($acteur) < 5  ){
        array_push($tabErreur,"Votre champs doit contenir au moins 5 caractères");
    }if (strlen($realisateur) < 5  ){
        array_push($tabErreur,"Votre champs doit contenir au moins 5 caractères");
    }if (strlen($producteur) < 5  ){
        array_push($tabErreur,"Votre champs doit contenir au moins 5 caractères");
    }
    if (strlen($synopsis) < 5  ){
        array_push($tabErreur,"Votre champs doit contenir au moins 5 caractères");
    }
    if (filter_var($url , FILTER_VALIDATE_URL)){

    }else{
        array_push($tabErreur , "Votre lien n'est pas valide");
    }
    if(count($tabErreur) != 0) {
        $message = "<ul>";
        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);

    }else{
        $db = connectionPDO();
        $titre = addslashes($titre);

        $acteur = addslashes($acteur);
        $realisateur = addslashes($realisateur);
        $producteur = addslashes($producteur);
        $synopsis = addslashes($synopsis);

        $sql = "INSERT INTO `movies` (`ID_MOVIE`, `TITRE`, `ACTEURS`, `REALISATEUR`, `PRODUCTEUR`, `ANNEEPROD`, `LANGUE`, `CATEGORIE`, `SYNOPSIS`, `VIDEO`) VALUES (NULL, '$titre', '$acteur' , '$realisateur', '$producteur', '$anneeeProd','Francais', '$categorie', '$synopsis', '$url')";

        $reponse = $db->query($sql);



    }


}
?>
<a href="liste.php">Liste des films</a>
</body>
</html>