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
      <h1>  <?php echo $_SESSION['pseudo'] ?> <br><a href="../Controleurs/controleurProfil.php"><img id="logomodif" class="modifier" src="../Images/modif.png"/><span class="modifier"> Retour à mon profil</span></a></h1>

    </div>

    <div class="info">
    <form name="modif" method="post" action="#">
      <table style="border-collapse:collapse;">

        <thead>
            <tr style="border-bottom:1px solid black;">
                <th id="title" colspan="2">Modifier mes informations personnelles</th>
            </tr>

        </thead>
        <tr></tr><tr></tr>
        <tr><td><font size="4.5" color="black">Coordonnées  </font></td><td><INPUT type="submit" name="modif_coordonnees" value="Modifier mes coordonnées"/></td></tr>
        <tr><td><?php echo $a[3] ?></td></tr>
        <tr><td><?php echo $a[8] ?></td></tr>
        <tr><td><?php echo $a[6] ?></td></tr>
        <tr><td><?php echo $a[7] ?></td></tr>
        <tr style="border-bottom:1px solid black;"><td><?php echo $a[5] ?></td><td></td></tr>
        <tr></tr><tr></tr>
        <tr><td><font size="4.5" color="black">Adresse mail </font> </td><td><INPUT type="submit" name="modif_mail" value="Modifier mon adresse mail"/></td></tr>
        <tr style="border-bottom:1px solid black;"><td><?php echo $a[2] ?></td><td></td></tr>
          <tr></tr><tr></tr>
        <tr style="border-bottom:1px solid black;"><td><font size="4.5" color="black">Mot de passe  </font></td><td><INPUT type="submit" name="modif_mdp" value="Modifier le mot de passe"/></td></tr>
      </table>
      </form>
    </div>


  </body>
    <?php require '../Vues/footer.php'; ?>

  </html>
