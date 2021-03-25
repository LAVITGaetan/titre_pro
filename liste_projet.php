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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include('menu.php'); ?>
   <h1>Toutes les idées de projets</h1>
   <div class="liste_projet">
       <?php
       ?>
   </div>
   <?php include('footer.php'); ?>
</body>
</html>