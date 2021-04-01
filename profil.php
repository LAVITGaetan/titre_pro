<?php
session_start();

//Recuperer la photo de profil de l'utilisateur
$bdd = new PDO('mysql:host=127.0.0.1;dbname=mydevteam;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM membre WHERE id="' . $_GET['id'] . '"');
while ($donnees = $reponse->fetch()) {
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
    $competence = $donnees['competence'];
    $date_inscription = $donnees['date_inscription'];
    $photo_profil = $donnees['photo_profil'];
    $mail = $donnees['mail'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre profil</title>

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
   <div class="profil">
        <div class="profil_image">
            <img id="profil_image" src="upload/<?php echo $photo_profil ?>">
            <h3 class="profil_nom"><?php echo $nom ?></h3><br>
            <h3 class="profil_prenom"><?php echo $prenom ?></h3>
        </div>
        <div class="profil_competence-p">
            <h2><?php echo $competence ?></h2>
        </div>
        <div class="profil_description">
            <p class="description_texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis tempora repellendus exercitationem deleniti nihil culpa reiciendis ipsam eius, delectus accusamus cumque excepturi accusantium laboriosam aperiam dolores fugit laborum expedita libero!</p>
        </div>
        <div class="profil_informations">
            <h6>Addresse mail: <?php echo $mail ?></h6>
            <h6>Date d'inscription: <?php echo $date_inscription ?></h6>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
</body>

</html>