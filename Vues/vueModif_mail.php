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
      <caption>Modifier mon adresse mail :</caption>
      <tr></tr><tr></tr>
      <tr><td>Ancienne adresse mail : </td><td><INPUT type="text" name="mail_old" /></td></tr>
      <tr><td>Nouvelle adresse mail : </td><td><INPUT type="text" name="mail_new" /></td></tr>
      <tr><td>Confirmer la nouvelle adresse : </td><td><INPUT type="text" name="mail_new2" /></td></tr>
    </table>
    <br></br>
    <div class="Valider"><INPUT type="submit" name="valider" value="Valider"/></div>
    </FORM>

  </body>
    <?php require '../Vues/footer.php'; ?>

  </html>
