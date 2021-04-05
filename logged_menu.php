
<div class="menu">
    <div class="menu_logo">
        <a href="index.php"><img id="menu_logo" src="image/logo.png" alt="logo du site"></a>
    </div>
    <div class="menu_liens">
        <ul class="liens_liste">
            <li><a href="creer_projet.php">Créer un projet</a></li>
            <li><a href="liste_projet.php">Rejoindre un projet</a></li>
            <li><a href="competence.php">Compétences</a></li>
            <li><a href="mon_projet.php">Mon projet</a></li>
            <li><a href="espace_membre.php">Mon profil</a></li>
            <li>
                <form method="post">
                    <input id="deconnexion" type="submit" name="deconnexion" value="Deconnexion">
                </form>
            </li>
        </ul>
    </div>
</div>
<div class="mobile_menu">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
        <a href="espace_membre.php"><li><img class="projet_profil_logo" src="upload/<?php echo $photo_profil;?>" alt="photo de profil"><?php echo $nom .' ' . $prenom;?></li></a>
      <a href="creer_projet.php"><li>Créer un projet</li></a>
      <a href="liste_projet.php"><li>Rejoindre un projet</li></a>
      <a href="competence.php"><li>Compétences</li></a>
      <a href="mon_projet.php"><li>Mon projet</li></a>
      <a href="deconnexion.php"><li>Se déconnecter</li></a>
    </ul>
  </div>
</nav>
</div>
<?php
if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location:connexion_membre.php');
}
?>