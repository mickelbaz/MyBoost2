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
      <caption>Modifier mon mot de passe :</caption>
      <tr></tr><tr></tr>
      <tr><td>Ancien mot de passe: </td><td><INPUT type="text" name="mdp_old" /></td></tr>
      <tr><td>Nouveau mot de passe : </td><td><INPUT type="text" name="mdp_new" /></td></tr>
      <tr><td>Confirmer le nouveau mot de passe : </td><td><INPUT type="text" name="mdp_new2" /></td></tr>
    </table>
    <br></br>
    <div class="Valider"><INPUT type="submit" name="valider" value="Valider"/></div>
    </FORM>

  </body>
    <?php require '../Vues/footer.php'; ?>

  </html>
