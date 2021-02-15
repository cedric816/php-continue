<?php
//fonction pour nettoyer les données reçues de l'utilisateur
function testDonnee($donnee){
    $donnees = trim($donnee); //supprime les espaces inutiles
    $donnees = stripslashes($donnee); //supprime les antislashs
    $donnees = htmlspecialchars($donnee); //echappe les caractères spéciaux
    return $donnees;
}

//exe 1 et 3
//avec utilisation de la fonction de nettoyage
if (isset($_GET['nom']) and isset($_GET['prenom'])){
            $nom = testDonnee($_GET['nom']);
            echo $nom;
            echo("<br>");
            $prenom = testDonnee($_GET['prenom']);
            echo $prenom;
            echo("<br>");
}

//exe 2 et 4
//sans utilisation de la fonction de nettoyage
if (isset($_POST['nom']) and isset($_POST['prenom'])){
    echo $_POST['nom'];
    echo("<br>");
    echo $_POST['prenom'];
    echo("<br>");
}

?>
