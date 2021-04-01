<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher une compétence</title>
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

    <h1>Vous recherchez une compétence?<br> Consultez la liste des membres</h1>

    <?php
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=mydevteam;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM membre WHERE competence="' . $_GET['competence'] . '" ORDER BY id DESC ');
    while($donnees = $reponse->fetch()){
        echo '    <div class="profil">
        <div class="profil_image">
            <img id="profil_image" src="upload/'. $donnees['photo_profil'] . '">
            <h3 class="profil_nom">'. $donnees['nom'] . '</h3><br>
            <h3 class="profil_prenom">' . $donnees['prenom'] . '</h3>
        </div>
        <div class="profil_competence-p">
            <h2>' . $donnees['competence'] . '</h2>
        </div>
        <div class="profil_description">
            <p class="description_texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis tempora repellendus exercitationem deleniti nihil culpa reiciendis ipsam eius, delectus accusamus cumque excepturi accusantium laboriosam aperiam dolores fugit laborum expedita libero!</p>
        </div>
        <div class="profil_informations">
            <h6>Addresse mail: ' . $donnees['mail'] .'</h6>
            <h6>Date inscription:' . $donnees['date_inscription'] . '</h6>
        </div>
    </div>';
    }
    ?>

    <?php include('footer.php'); ?>
</body>

</html>