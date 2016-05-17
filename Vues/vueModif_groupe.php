<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

    <title>Mon profil</title>
  </head>

  <body>
  <?php require 'Vues/header.php'; ?>

  <div class="head_groupe">

    <div class="groupe">

      <h1 class="name_groupe"><?php echo $donnees[0] ?><br><a href="index.php?page=groupe&groupe=<?php echo $donnees[0]?>"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Retour à la page du groupe</span></a></h1>

    </div>

  </div>
  </body>
    <?php require 'Vues/footer.php'; ?>

  </html>
