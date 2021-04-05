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
    $photo_profil = $donnees['photo_profil'];
}
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
    <div class="marge_menu2"></div>
    <form class="formulaire_projet" method="POST">
        <h1 class="form_head">Une idée de projet?<br>Publiez la et trouvez les compétences manquantes à votre projet</h1>
        <label class="formulaire_titre_projet label" for="titre">Titre du projet<br />
            <input class="formulaire_titre_projet formulaire_entrees" id="titre" type="text" name="titre"><br>
        </label>
        <label class="formulaire_titre_projet label" for="description">Description du projet<br />
            <textarea class="formulaire_entrees" id="description" name="description"> </textarea>
        </label>
        <div class="formulaire_ajout_competence">
            <div class="form_check">
                <h3 class="form_titre_competence">Sélectionnez les compétences recherchées</h3>
                <input id="myCheck1" onclick="myFunction()" class="checkbox" type="checkbox" name="graphiste"><label><span class="checkbox_label">Graphiste</span></label><br>
                <input id="myCheck2" onclick="myFunction()" class="checkbox" type="checkbox" name="dev_front"><label><span class="checkbox_label">Développeur Front-End</span></label><br>
                <input id="myCheck3" onclick="myFunction()" class="checkbox" type="checkbox" name="dev_mobile"><label><span class="checkbox_label">Développeur Mobile</span></label><br>
                <input id="myCheck4" onclick="myFunction()" class="checkbox" type="checkbox" name="dev_back"><label><span class="checkbox_label">Développeur Back-End</span></label><br>
                <input id="myCheck5" onclick="myFunction()" class="checkbox" type="checkbox" name="web_designer"><label><span class="checkbox_label">Web Designer</span></label><br>
                <input id="myCheck6" onclick="myFunction()" class="checkbox" type="checkbox" name="social"><label><span class="checkbox_label">Social Media Manager</span></label><br>
                <input id="myCheck7" onclick="myFunction()" class="checkbox" type="checkbox" name="expert"><label><span class="checkbox_label">Expert en cyber-sécurité</span></label>

            </div>
            <h3 class="competence_choisie form_titre_competence">Compétences choisies</h3>
            <div class="creer_projet_competence">

                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image1">
                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image2">
                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image3">
                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image4">
                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image5">
                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image6">
                <img class="projet_competence_logo logo-js" src="image/none.png" alt="logo de compétence" id="image7">
            </div>
        </div>
        <input class="competence_bouton form_submit" type="submit" value="Publier le projet" name="publier">

    </form>
    <?php
    // Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=id16532210_my_dev_team;charset=utf8', 'id16532210_root', 'csGXE/ZKB1gs9=MJ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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

        //Récupération des checkbox
        if(isset($_POST['graphiste'])){
            $graphiste = 1;
        }
        else{
            $graphiste = 0;
        }
        if(isset($_POST['dev_front'])){
            $dev_front = 1;
        }
        else{
            $dev_front = 0;
        }
        if(isset($_POST['dev_mobile'])){
            $dev_mobile = 1;
        }
        else{
            $dev_mobile = 0;
        }
        if(isset($_POST['dev_back'])){
            $dev_back = 1;
        }
        else{
            $dev_back = 0;
        }
        if(isset($_POST['web_designer'])){
            $web_designer = 1;
        }
        else{
            $web_designer = 0;
        }
        if(isset($_POST['social'])){
            $social = 1;
        }
        else{
            $social = 0;
        }
        if(isset($_POST['expert'])){
            $expert = 1;
        }
        else{
            $expert = 0;
        }

        //Récuperer la date actuelle
        $date_publication = date("Y-m-d");

        // Requete d'insertion des données dans la table 'membre'
        $requete = 'INSERT INTO projet VALUES(NULL, "' . $_SESSION['id'] . '", "' . $_SESSION['photo_profil'] . '", "' . $_SESSION['nom'] . '", "' . $_SESSION['prenom'] . '", "' . $_POST['titre'] . '", "' . $_POST['description'] . '", "' . $graphiste . '"
        , "' . $dev_front . '", "' . $dev_mobile . '", "' . $dev_back . '", "' . $web_designer . '", "' . $social . '", "' . $expert . '", "' . $date_publication . '")';
        $resultat = $bdd->query($requete);
        header('location:liste_projet.php');
    }

    }
    ?>

    <?php
    include('footer.php');
    ?>
    <script>
        function myFunction() {

            // Recupérer les checkbox
            var checkBox1 = document.getElementById("myCheck1");
            var checkBox2 = document.getElementById("myCheck2");
            var checkBox3 = document.getElementById("myCheck3");
            var checkBox4 = document.getElementById("myCheck4");
            var checkBox5 = document.getElementById("myCheck5");
            var checkBox6 = document.getElementById("myCheck6");
            var checkBox7 = document.getElementById("myCheck7");


            //Récupérer les balises images de logo de compétence
            var image1 = document.getElementById("image1");
            var image2 = document.getElementById("image2");
            var image3 = document.getElementById("image3");
            var image4 = document.getElementById("image4");
            var image5 = document.getElementById("image5");
            var image6 = document.getElementById("image6");
            var image7 = document.getElementById("image7");

            // Si les checkbox sont cochées --> afficher le logo de compétence correspondant

            // Graphiste checkbox
            if (checkBox1.checked == true) {
                image1.src = "image/graphistel.png";
            } else {
                image1.src = "image/none.png";
            }

            // Développeur front checkbox
            if (checkBox2.checked == true) {
                image2.src = "image/dev_front.png";
            } else {
                image2.src = "image/none.png";
            }

            // Graphiste checkbox
            if (checkBox3.checked == true) {
                image3.src = "image/dev_mobile.png";
            } else {
                image3.src = "image/none.png";
            }

            // Graphiste checkbox
            if (checkBox4.checked == true) {
                image4.src = "image/dev_back.png";
            } else {
                image4.src = "image/none.png";
            }

            // Graphiste checkbox
            if (checkBox5.checked == true) {
                image5.src = "image/web_designer.png";
            } else {
                image5.src = "image/none.png";
            }

            // Graphiste checkbox
            if (checkBox6.checked == true) {
                image6.src = "image/social.png";
            } else {
                image6.src = "image/none.png";
            }

            // Graphiste checkbox
            if (checkBox7.checked == true) {
                image7.src = "image/cyber.png";
            } else {
                image7.src = "image/none.png";
            }
        }
        
    </script>
</body>

</html>