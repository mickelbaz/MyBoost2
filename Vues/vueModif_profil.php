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
      <caption>Modifier mes informations personnelles</caption>
      <tr></tr><tr></tr>
      <tr><<td>Coordonnées : </td><td>  <INPUT type="submit" name="modif_coordonnees" value="Modifier mes coordonnées"/></td></tr>
      <tr><td>Adresse : </td><td>adresse</td></tr>
      <tr><td>Code Postal : </td><td>cp</td></tr>
      <tr><td>Ville : </td><td>ville</td></tr>
      <tr><td>Pays : </td><td>pays</td></tr>
      <tr><td>Téléphone : </td><td>tel</td></tr>
      <tr></tr><tr></tr>
      <tr><td>Adresse mail : </td><td>adresse mail</td><td><INPUT type="submit" name="modif_mail" value="Modifier mon adresse mail"/></td></tr>
        <tr></tr><tr></tr>
      <td><INPUT type="submit" name="modif_mdp" value="Modifier le mot de passe"/></td></tr>
      </FORM>
    </table>



</body>
  <?php require '../Vues/footer.php'; ?>

</html>
