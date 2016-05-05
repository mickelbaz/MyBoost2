<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../Contenu/profil.css"/>

    <title>Mon profil</title>
  </head>

  <body>
  <?php require '../Vues/header.php'; ?>

  <br></br>
    <div class="content">
    <div class="avatar">
      <img id="avatar" src="../Images/Man_Silhouette.png"/>
    </div>

    <div class="top">
      <h1><?php echo $_SESSION['pseudo'] ?> <br><a href="../Controleurs/controleurProfil.php"><img id="logomodif" class="modifier" src="../Images/modif.png"/><span class="modifier"> Retour à mon profil</span></a></h1>
    </div>

      <div class="info">
    <FORM name="modif" method="post" action="">
    <table style="border-collapse:collapse;">
      <thead>
          <tr style="border-bottom:1px solid black;">
              <th id="title" colspan="2">Modifier mon adresse mail</th>
          </tr>

      </thead>
      <tr></tr><tr></tr>
      <tr><td>Ancienne adresse mail : </td><td><INPUT type="text" name="mail_old" /></td></tr>
      <tr><td>Nouvelle adresse mail : </td><td><INPUT type="text" name="mail_new" /></td></tr>
      <tr><td>Confirmer la nouvelle adresse : </td><td><INPUT type="text" name="mail_new2" /></td></tr>
    </table>
    <br></br>
    <div class="Valider"><INPUT type="submit" name="valider" value="Valider"/></div>
    </FORM>
  </div>

  </body>
    <?php require '../Vues/footer.php'; ?>

  </html>
