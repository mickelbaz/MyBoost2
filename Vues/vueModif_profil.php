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
      <tr><td>Coordonnées :</td></tr>
      <tr><tr>
      <tr><td>Adresse : </td><td>adresse</td>
        <td>
        </tr>
      <tr><td>Code Postal : </td><td>cp</td><td>

    </table>



</body>
  <?php require '../Vues/footer.php'; ?>

</html>
