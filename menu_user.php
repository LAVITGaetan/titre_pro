<link rel="stylesheet" href="style.css">
<div class="menu">
    <div class="menu_logo">
       <a href="accueil.php"><img id="menu_logo" src="image/logo.png" alt="logo du site"></a>
    </div>
    <div class="menu_liens">
        <ul class="liens_liste">
            <li><a href="creer_projet.php">Créer un projet</a></li>
            <li><a href="#">Rejoindre un projet</a></li>
            <li><a href="#">Compétences</a></li>
            <li><a href="#">Mes projets</a></li>
            <li><?php echo $nom . ' ' . $prenom;
            ?></li>
            
        </ul>
    </div>
</div>