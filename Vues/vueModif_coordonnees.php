<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>

    <title>Mon profil</title>
  </head>

  <body>
    <?php require 'Vues/header.php'; ?>

    <div class="content">
    <div class="avatar">
      <img id="avatar" src="Images/user.png"/>
    </div>

    <div class="top">
      <h1><?php echo $_SESSION['pseudo'] ?> <br><a href="index.php?page=profil"><img id="logomodif" class="modifier" src="Images/back.png"/><span class="modifier"> Retour à mon profil</span></a></h1>
    </div>

      <div class="info">
    <FORM name="modif" method="post" action="">
    <table style="border-collapse:collapse;">
      <thead>
          <tr style="border-bottom:1px solid black;">
              <th id="title" colspan="2">Modifier mes coordonnées</th>
          </tr>

      </thead>
      <tr></tr><tr></tr>
      <tr><td>Adresse : </td><td><INPUT type="text" name="adresse" size="30" value="<?php echo $a[3] ?>"/></td></tr>
      <tr><td>Code Postal : </td><td><INPUT type="text" name="cp" value="<?php echo $a[8] ?>"/></td></tr>
      <tr><td>Ville : </td><td><INPUT type="text" name="ville" value="<?php echo $a[6] ?>"/></td></tr>
      <tr><td>Région : </td><td><INPUT type="text" name="region" value="<?php echo $a[11] ?>"/></td></tr>
      <tr><td>Pays : </td><td><INPUT type="text" name="pays" value="<?php echo $a[7] ?>"/></td></tr>
      <tr><td>Téléphone : </td><td><INPUT type="text" name="tel" value ="<?php echo $a[5] ?>"/></td></tr>
    </table>
    <br></br>
    <div class="Valider"><INPUT type="submit" name="valider" value="Valider"/></div>
  </FORM>
</div>

  <body>
      <?php require 'Vues/footer.php'; ?>
  </html>
