<?php require_once 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

    <title>Modification du groupe</title>
  </head>
  <body>

  <div class="head_groupe">
    <div class="groupe">
      <h1 class="name_groupe"><?php echo $donnees[0] ?><br></h1>
    </div>
  </div>
  <br>
<form class="modifGroupe" action="" method="post">
  <div class="info">
    <table style="border-collapse:collapse;">
      <thead>
          <tr style="border-bottom:1px solid black;">
              <th id="title" colspan="2">Modifier les informations du groupe</th>
          </tr>
      </thead>
      <tr></tr><tr></tr>
      <tr><td>Nom du groupe : </td><td><INPUT type="text" name="nom" size="30" value="<?php echo $donnees[0] ?>"/></td></tr>
      <tr><td>Nombre de membres max : </td><td><INPUT type="number" name="nb" value="<?php echo $donnees[4] ?>" min="<?php echo $donnees[4] ?>" max="110"/></td></tr>
    </table>
    <br></br>
    <div class="valider"><INPUT type="submit" name="envoyer" value="Valider"/></div>
  </div>
</form>
  </body>
  <br></br>
    
  </html>

  <?php require 'Vues/footer.php'; ?>
