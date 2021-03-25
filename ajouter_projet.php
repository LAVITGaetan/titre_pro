<?php
session_start();
// Connexion à la base de données
$bdd = new PDO('mysql:host=127.0.0.1;dbname=mydevteam;charset=utf8', 'phpmyadmin', 'Workout974!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM membre');

// Si les champs sont remplis et que l'utilisateur clique sur le bouton
if (
    isset($_POST['publier'])
    & !empty($_POST['titre'])
    & !empty($_POST['description'])
) {
    //Si les mots de passe sont identiques
    if ($_POST['mot_de_passe'] == $_POST['mot_de_passe_conf']) {

        //Vérification des entrées de l'utilisateur
        $_POST['titre'] = htmlentities($_POST['titre']);
        $_POST['description'] = htmlentities($_POST['description']);

        // Requete d'insertion des données dans la table 'membre'
        $requete = 'INSERT INTO projet VALUES(NULL, "' . $_SESSION['id'] . '", "' . $_POST['titre'] . '", "' . $_POST['description'] . '")';
        $resultat = $bdd->query($requete);
        header('location:creer_projet.php');
    }

    }
    ?>