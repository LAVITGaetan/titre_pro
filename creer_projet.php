<?php
session_start();
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
    <!-- Menu de la page -->
    <?php
    if (isset($_SESSION['id'])) {
        include('logged_menu.php');
    } else {
        include('menu.php');
    }
    ?>
    <h1>Une idée de projet?<br>Publiez la et trouvez les compétences manquantes à votre projet</h1>
    <form class="formulaire_projet" action="ajouter_projet.php" method="POST">
        <label class="label" for="titre">Titre du projet<br />
            <input class="formulaire_entrees" id="titre" type="text" name="titre">
        </label>
        <label class="label" for="description">Description du projet<br />
            <textarea class="formulaire_entrees" id="description" name="description"> </textarea>
        </label> 
        <input type="checkbox" name="graphiste"><label>Graphiste</label>
        <input type="checkbox" name="dev_front"><label>Développeur Front-End</label>
        <input type="checkbox" name="dev_mobile"><label>Développeur Mobile</label>
        <input type="checkbox" name="dev_back"><label>Développeur Back-End</label>
        <input type="checkbox" name="web_designer"><label>Web Designer</label>
        <input type="checkbox" name="social"><label>Social Media Manager</label>
        <input type="checkbox" name="expert"><label>Expert en cyber-sécurité</label>
        <input class="competence_bouton" type="submit" value="Publier le projet" name="publier">
    </form>
    <h1>Quelles compétences recherchez-vous?</h1>

    <?php
    include('footer.php');
    ?>
</body>

</html>