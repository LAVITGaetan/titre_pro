<?php
session_start();
//Recuperer les infos de l'utilisateur
$bdd = new PDO('mysql:host=localhost;dbname=id16532210_my_dev_team;charset=utf8', 'id16532210_root', 'csGXE/ZKB1gs9=MJ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM membre WHERE id="' . $_SESSION['id'] . '"');
while ($donnees = $reponse->fetch()) {
    $photo_profil = $donnees['photo_profil'];
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
    $mail = $donnees['mail'];
    $description = $donnees['description'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre profil</title>
    <link rel="stylesheet" media="screen and (min-width: 1241px)" href="desktop.css" />
    <link rel="stylesheet" media="screen and (max-width: 1240px)" href="mobile.css" />
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

    <div class="profil marge_menu">

        <div class="profil_nouveau">
            <form method="post" class="formulaire_modification_profil">
                <h1 class="md_titre">Modifier vos informations personnelles</h1>
                <label for="">Nom <br>
                    <input class="formulaire_entree" type="text" name="nom" value="<?php echo $nom; ?>"></label><br>
                <label for="">Prenom<br>
                    <input class="formulaire_entree" type="text" name="prenom" value="<?php echo $prenom; ?>"></label><br>

                <label for="">Addresse mail<br>
                    <input class="formulaire_entree" type="mail" name="mail" value="<?php echo $mail; ?>"></label><br>
                <label class="formulaire_titre_projet label" for="description">Votre description<br />
                    <textarea class="formulaire_entrees textarea" id="description" name="description"><?php echo $description; ?></textarea>
                </label>
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

        //Vérification des entrées de l'utilisateur
        $_POST['nom'] = htmlentities($_POST['nom'], ENT_QUOTES);
        $_POST['prenom'] = htmlentities($_POST['prenom'], ENT_QUOTES);
        $_POST['mail'] = htmlentities($_POST['mail'], ENT_QUOTES);
        $_POST['description'] = htmlentities($_POST['description'], ENT_QUOTES);
        $bdd = new PDO('mysql:host=localhost;dbname=id16532210_my_dev_team;charset=utf8', 'id16532210_root', 'csGXE/ZKB1gs9=MJ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT * FROM membre WHERE id ="' . $_SESSION['id'] . '"');
        $requete = 'UPDATE membre SET nom="' . $_POST['nom'] . '", prenom="' . $_POST['prenom'] . '", description="' . $_POST['description'] . '", mail="' . $_POST['mail'] . '" WHERE id="' . $_SESSION['id'] . '"';
        $resultat = $bdd->query($requete);
        header('location:espace_membre.php');
    }
    ?>
    <?php
    include('footer.php');
    ?>
</body>

</html>