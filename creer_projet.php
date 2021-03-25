<?php
session_start();
echo $_SESSION['id'];
echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['date_inscription'];
echo $_SESSION['mail'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un projet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://zupimages.net/up/21/12/kubl.png">
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <h1>Une idée de projet?<br>Publiez la et trouvez les compétences manquantes à votre projet</h1>
    <form class="formulaire_projet" action="ajouter_projet.php" method="POST">
        <label class="label" for="titre">Titre du projet<br />
            <input class="formulaire_entrees" id="titre" type="text" name="titre">
        </label>
        <label class="label" for="description">Description du projet<br />
            <textarea class="formulaire_entrees" id="description" type="text" name="description"> </textarea>
        </label>
        <input type="checkbox" name="developpeur-back" id=""><label for="">Développeur Back-End</label>

        <input type="checkbox" name="developpeur-front" id=""><label for="">Développeur Front-End</label>
        <input type="checkbox" name="developpeur-mobile" id=""><label for="">Développeur Mobile</label>
        <input type="checkbox" name="expert-cyber-securite" id=""><label for="">Expert en cyber-sécurité</label>
        <input type="checkbox" name="graphiste" id=""><label for="">Graphiste</label>
        <input type="checkbox" name="social-media-manager" id=""><label for="">Social Media Manager</label>
        <input type="checkbox" name="web-designer" id=""><label for="">Web Designer</label>
        <input class="formulaire_bouton" type="submit" value="Publier le projet" name="publier">
    </form>
    <h1>Quelles compétences recherchez-vous?</h1>

        <?php
        include('footer.php');
        ?>
        <script src="script.js"></script>
</body>

</html>