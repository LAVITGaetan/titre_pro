<?php
session_start();
echo $_SESSION['id'];
echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['date_inscription'];
echo $_SESSION['mail'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre profil</title>

</head>

<body>
    <?php
    include('menu.php');
    ?>
    <!-- Image de couverture -->
    <div class="profil_couverture"></div>
    <div class="profil">
        <div class="profil_image">
            <img id="profil_image" src="upload/<?php echo $_SESSION['photo_profil']; ?>" alt="photo de profil de l'utilisateur">
        </div>
        <div class="profil_identifiants">
            <h3 class="profil_nom"><?php echo $_SESSION['nom'] ?></h3>
            <h3 class="profil_prenom"><?php echo $_SESSION['prenom'] ?></h3>
        </div>
        <form action="upload-manager.php" method="post" enctype="multipart/form-data">
            <h2>Upload File</h2>
            <label for="fileSelect">Filename:</label>
            <input type="file" name="photo" id="fileSelect">
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>

    <?php
    include('footer.php');
    ?>
</body>

</html>