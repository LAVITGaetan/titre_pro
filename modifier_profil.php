<?php
session_start();

//Recuperer la photo de profil de l'utilisateur
$bdd = new PDO('mysql:host=127.0.0.1;dbname=mydevteam;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM membre WHERE id="' . $_SESSION['id'] . '"');
while ($donnees = $reponse->fetch()) {
    $photo_profil = $donnees['photo_profil'];
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
    <!-- Image de couverture -->

    <div class="profil">
        <div class="profil_actuel">
            <ul>
                <li><?php echo $_SESSION['nom'];?></li>
                <li><?php echo $_SESSION['prenom'];?></li>
                <li><?php echo $_SESSION['mail'];?></li>
                <li><?php echo $_SESSION['nom'];?></li>
            </ul>
        </div>
        <form class="profil_upload" action="upload-manager.php" method="post" enctype="multipart/form-data">
                <input class="selection_photo" type="file" name="photo">
                <input class="competence_bouton" type="submit" name="upload" value="Modifier la photo">
            </form>
        <div class="profil_nouveau"></div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>