<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php continue!!</title>
</head>
<body>
    <?php
    //Les paramètres d'une URL
        //exe 1
        if (isset($_GET['nom']) and isset($_GET['prenom'])){
            echo $_GET['nom'];
            echo("<br>");
            echo $_GET['prenom'];
            echo("<br>");
        }

        //exe 2
        if (isset($_GET['age'])){
            echo $_GET['age'];
            echo("<br>");
        } else {
            echo ("il n'y a pas de paramètre 'age' ");
            echo("<br>");
        }

        //exe 3
        if (isset($_GET['dateDebut']) and isset($_GET['dateFin'])){
            echo $_GET['dateDebut'];
            echo("<br>");
            echo $_GET['dateFin'];
            echo("<br>");
        }

        //exe 4
        if (isset($_GET['langage']) and isset($_GET['serveur'])){
            echo $_GET['langage'];
            echo("<br>");
            echo $_GET['serveur'];
            echo("<br>");
        }

        //exe 5
        if (isset($_GET['semaine'])){
            echo $_GET['semaine'];
            echo("<br>");
        }

        //exe 6
        if (isset($_GET['batiment']) and isset($_GET['salle'])){
            echo $_GET['batiment'];
            echo("<br>");
            echo $_GET['salle'];
            echo("<br>");
        }
        ?>

    <!--Les formulaires
        exe 1 et 3-->
        <h3>GET</h3>
        <form method="GET" action="user.php">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" placeholder="valider">
        </form>

        <!-- exe 2 et 4-->
        <h3>POST</h3>
        <form method="POST" action="user.php">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" placeholder="valider">
        </form>

        <?php
            //exe 5 et 6
            if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['civilite'])){
            echo $_POST['civilite'];
            echo("<br>");
            echo $_POST['nom'];
            echo("<br>");
            echo $_POST['prenom'];
            echo("<br>");
            } else {
                echo("
                <h3>POST sur même page</h3>
                <form method='POST' action='index.php'>
                <label for='civilite'>Civilité</label>
                <select name='civilite' id='civilite' required>
                    <option value='madame'>Madame</option>
                    <option value='monsieur'>Monsieur</option>
                </select>
                <label for='nom'>Nom</label>
                <input type='text' name='nom' id='nom' required>
                <label for='prenom'>Prénom</label>
                <input type='text' name='prenom' id='prenom'required>
                <input type='submit' placeholder='valider'>
                </form>
                ");
            }

            //exe 7
            if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['civilite'])){
                echo $_POST['civilite'];
                echo("<br>");
                echo $_POST['nom'];
                echo("<br>");
                echo $_POST['prenom'];
                echo("<br>");
                echo $_POST['fichier'];
                echo("<br>");
                $fichier = new SplFileInfo($_POST['fichier']);
                echo($fichier->getExtension());
                    if ($fichier->getExtension()=='pdf'){
                        echo("c'est bien un pdf");
                    }
                } else {
                    echo("
                    <h3>POST sur même page</h3>
                    <form method='POST' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>
                    <label for='civilite'>Civilité</label>
                    <select name='civilite' id='civilite' required>
                        <option value='madame'>Madame</option>
                        <option value='monsieur'>Monsieur</option>
                    </select>
                    <label for='nom'>Nom</label>
                    <input type='text' name='nom' id='nom' required>
                    <label for='prenom'>Prénom</label>
                    <input type='text' name='prenom' id='prenom' required>
                    <label for='fichier'>Fichier à envoyer</label>
                    <input type='file' name='fichier' id='fichier' required>
                    <input type='submit' placeholder='valider'>
                    </form>
                    ");
                }

            //exe 8
            if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['civilite'])){
                $fichier = new SplFileInfo($_POST['fichier']);
                echo($fichier->getExtension());
                    if ($fichier->getExtension()==='pdf'){
                        echo("c'est bien un pdf");
                        echo $_POST['civilite'];
                        echo("<br>");
                        echo $_POST['nom'];
                        echo("<br>");
                        echo $_POST['prenom'];
                        echo("<br>");
                        echo $_POST['fichier'];
                        echo("<br>");
                    } else { echo("c'est pas un pdf!");}
                } else {
                    echo("
                    <h3>POST sur même page avec detection extension fichier</h3>
                    <form method='POST' action='index.php'>
                    <label for='civilite'>Civilité</label>
                    <select name='civilite' id='civilite' required>
                        <option value='madame'>Madame</option>
                        <option value='monsieur'>Monsieur</option>
                    </select>
                    <label for='nom'>Nom</label>
                    <input type='text' name='nom' id='nom' required>
                    <label for='prenom'>Prénom</label>
                    <input type='text' name='prenom' id='prenom' required>
                    <label for='fichier'>Fichier à envoyer</label>
                    <input type='file' name='fichier' id='fichier' required>
                    <input type='submit' placeholder='valider'>
                    </form>
                    ");
                }
        ?>

    
</body>
</html>