<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un projet</title>
    <link rel="stylesheet" media="screen and (min-width: 1241px)" href="desktop.css" />
    <link rel="stylesheet" media="screen and (max-width: 1240px)" href="mobile.css" />
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
    <h1 class="marge_menu">Créez votre projet et invitez d'autres membres à y participer</h1>
    <div class="liste_projet">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=id16532210_my_dev_team;charset=utf8', 'id16532210_root', 'csGXE/ZKB1gs9=MJ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT * FROM projet WHERE id_chef="' . $_SESSION['id'] . '"');
        while ($donnees = $reponse->fetch()) {
            echo '<div class="projet_carte">';
            echo '<div class="projet_chef">';
            echo '<a href="profil.php?id=' . $donnees['id_chef'] .'"><img class="projet_profil_logo" src="upload/' . htmlentities($donnees['photo_profil']) . '" alt="photo de profil"></a>';
            echo '<div class="projet_noms">';
            echo '<h3>' . htmlentities($donnees['nom']) . '</h3>';
            echo '<h3>' . htmlentities($donnees['prenom']) . '</h3>';
            echo '</div>';
            echo '</div>';
            echo '<div class="projet_infos">';
            echo '<h2 class="projet_titre">' . htmlentities($donnees['titre']) . '</h2>';
            echo '<p class="projet_description">' . htmlentities($donnees['description']) . '</p>';
            echo '</div>';
            echo '<div class="projet_tip">Compétences recherchées</div>';
            echo '<div class="projet_competence">';
            if ($donnees['graphiste'] == 1) {
                echo '<img class="projet_competence_logo" src="image/graphiste.png" alt="logo de competence">';
            }
            if ($donnees['dev_front'] == 1) {
                echo '<img class="projet_competence_logo" src="image/dev_front.png" alt="logo de competence">';
            }
            if ($donnees['dev_mobile'] == 1) {
                echo '<img class="projet_competence_logo" src="image/dev_mobile.png" alt="logo de competence">';
            }
            if ($donnees['dev_back'] == 1) {
                echo '<img class="projet_competence_logo" src="image/dev_back.png" alt="logo de competence">';
            }
            if ($donnees['web_designer'] == 1) {
                echo '<img class="projet_competence_logo" src="image/web_designer.png" alt="logo de competence">';
            }
            if ($donnees['social'] == 1) {
                echo '<img class="projet_competence_logo" src="image/social.png" alt="logo de competence">';
            }
            if ($donnees['expert'] == 1) {
                echo '<img class="projet_competence_logo" src="image/cyber.png" alt="logo de competence">';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>