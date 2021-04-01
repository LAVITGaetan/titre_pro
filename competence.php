<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les compétences</title>
    <link rel="stylesheet" href="style.css">
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
    <h1>Toutes les compétences</h1>
    <div class="liste_competence">
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/graphisteL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=graphiste"><input class="competence_bouton" type="submit" value="Rechercher un graphiste"></a></div>
        </div>
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/dev_frontL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=developpeur-front"><input class="competence_bouton" type="submit" value="Rechercher un développeur front-end"></a></div>
        </div>
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/dev_mobileL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=developpeur-mobile"><input class="competence_bouton" type="submit" value="Rechercher un développeur mobile"></a></div>
        </div>
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/dev_backL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=developpeur-back"><input class="competence_bouton" type="submit" value="Rechercher un développeur back-end"></a></div>
        </div>
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/web_designerL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=web_designer"><input class="competence_bouton" type="submit" value="Rechercher un web-designer"></a></div>
        </div>
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/socialL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=social-media-manager"><input class="competence_bouton" type="submit" value="Rechercher un social-media-manager"></a></div>
        </div>
        <div class="competence_carte">
            <div class="competence_image">
                <img class="competence_logo" src="image/cyberL.png" alt="">
            </div>
            <div class="competence_infos">Un graphiste est un professionnel de la communication qui conçoit des solutions de communication visuelle. Il travaille sur le sens des messages à l'aide des formes graphiques qu'il utilise sur tout type de supports.</div>
            <div class="competence_recherche"><a href="competence_inscrits.php?competence=expert-cyber-securite"><input class="competence_bouton" type="submit" value="Rechercher un expert en cyber sécurité"></a></div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>