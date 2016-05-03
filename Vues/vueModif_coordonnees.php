<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../Contenu/profil.css"/>

    <title>Mon profil</title>
  </head>

  <body>
    <?php require '../Vues/header.php'; ?>

    <div class="content">
    <div class="avatar">
      <img id="avatar" src="../Images/Man_Silhouette.png"/>
    </div>

    <div class="top">
      <h1>PRÉNOM NOM, <span>Ville</span></h1>
    </div>

    <FORM name="modif" method="post" action="">
    <table>
      <caption>Modifier mes coordonnées</caption>
      <tr></tr><tr></tr>
      <tr><td>Adresse : </td><td><INPUT type="text" name="adresse" /></td></tr>
      <tr><td>Code Postal : </td><td><INPUT type="text" name="cp" /></td></tr>
      <tr><td>Ville : </td><td><INPUT type="text" name="ville" /></td></tr>
      <tr><td>Pays : </td><td><INPUT type="text" name="pays" /></td></tr>
      <tr><td>Téléphone : </td><td><INPUT type="text" name="tel" /></td></tr>
    </table>
    <br></br>
    <div class="Valider"><INPUT type="submit" name="valider" value="Valider"/></div>
  </FORM>

  <body>
      <?php require '../Vues/footer.php'; ?>
  </html>
