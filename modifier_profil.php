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
                <li class="profil_actuel_li"><?php echo $_SESSION['nom']; ?></li>
                <li class="profil_actuel_li"><?php echo $_SESSION['prenom']; ?></li>
                <li class="profil_actuel_li"><?php echo $_SESSION['mail']; ?></li>
            </ul>
        </div>

        <div class="profil_nouveau">
            <form method="post">
                <label for="">Nom
                    <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>"></label><br>
                <label for="">Prenom
                    <input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>"></label><br>
                <label for="">Addresse mail
                    <input type="mail" name="mail" value="<?php echo $_SESSION['mail']; ?>"></label><br>
                    <label for="">Votre ancien mot de passe
                <input type="password"></label><br>
                <label for="">Votre nouveau mot de passe
                <input type="password"></label>
                <input class="competence_bouton" type="submit" name="modifier_profil" value="Modifier votre profil">
            </form>
        </div>
        <form class="profil_upload" action="upload-manager.php" method="post" enctype="multipart/form-data">
            <input class="selection_photo" type="file" name="photo">
            <input class="competence_bouton" type="submit" name="upload" value="Modifier la photo">
        </form>
    </div>
    <?php
    if (isset($_POST['modifier_profil'])) {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=mydevteam;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT * FROM membre WHERE id ="' . $_SESSION['id'] . '"');

        $requete ='UPDATE membre SET nom="' . $_POST['nom'] . '", prenom="' . $_POST['prenom'] . '", mail="' . $_POST['mail'] . '" WHERE id="' . $_SESSION['id'] . '"';
        $resultat = $bdd->query($requete);
        echo $requete;
    }
    ?>
    <?php
    include('footer.php');
    ?>
</body>

</html>