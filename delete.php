<?php
session_start();
if (isset($_POST['supprimer'])) {
    //Récuperation de l'utilisateur via son pseudo
    $bdd = new PDO('mysql:host=localhost;dbname=id16532210_my_dev_team;charset=utf8', 'id16532210_root', 'csGXE/ZKB1gs9=MJ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM projet');
    $requete = 'DELETE FROM projet WHERE id ="' . $_POST['id_projet'] . '"';
    $resultat = $bdd->query($requete);
    header('location:espace_membre.php#encre_projet');
}
?>