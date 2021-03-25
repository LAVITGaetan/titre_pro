<?php
session_start();
echo $_SESSION['id'];
echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['date_inscription'] ;
echo $_SESSION['mail'];
if (isset($_POST['deconnexion'])) {
    header('Refresh:0;');
    echo 'Vous êtes déconnecté';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyDevTeam</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://zupimages.net/up/21/12/kubl.png">
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <!-- Formulaire de connexion -->

    <form class="formulaire_connexion" method="post">
        <!-- titre du formulaire -->
        <h2 class="formulaire_titre">Connectez vous!</h2>

        <!-- Logo du formulaire -->
        <div class="formulaire_logo">
            <img src="image/logo.png" alt="logo du formulaire">
        </div>
        <label class="label" for="pseudo">Adresse mail<br />
            <input class="formulaire_entrees" id="email" type="text" name="email">
        </label>
        <br />
        <div>
            <label class="label" for="mot_de_passe">Mot de passe<br />
                <input class="formulaire_entrees" id="mot_de_passe" type="password" name="mot_de_passe">
            </label>
            <br />
        </div>
        <input class="formulaire_bouton" type="submit" value="Se connecter" name="connecter">
    </form>
    <!-- Fin du formulaire de connexion -->

    <?php
    include('connexion.php');
    include('footer.php');
    ?>

</body>

</html>