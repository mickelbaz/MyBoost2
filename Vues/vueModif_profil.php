<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>

    <title>Modifier mon profil</title>
  </head>

  <body>
  <?php require 'Vues/header.php'; ?>


    <div class="content">
    <div class="avatar">
      <img id="avatar" src="Images/user.png"/>
    </div>

    <div class="top">
      <h1>  <?php echo $_SESSION['pseudo'] ?> <br><a href="index.php?page=profil"><img id="logomodif" class="modifier" src="Images/back.png"/><span class="modifier"> Retour à mon profil</span></a></h1>

    </div>

    <div class="info">

      <table style="border-collapse:collapse;">

        <thead>
            <tr style="border-bottom:1px solid black;">
                <th id="title" colspan="2">Modifier mes informations personnelles</th>
            </tr>

        </thead>
        <tr></tr><tr></tr>
        <tr><td><font size="4.5" color="black">Coordonnées  </font></td><td><a href="index.php?page=modif_coordonnees"><INPUT type="button" name="modif_coordonnees" value="Modifier mes coordonnées"/></a></td></tr>
        <tr><td><?php echo $a[3] ?></td></tr>
        <tr><td><?php echo $a[8] ?></td></tr>
        <tr><td><?php echo $a[6] ?></td></tr>
        <tr><td><?php echo $a[7] ?></td></tr>
        <tr style="border-bottom:1px solid black;"><td><?php echo $a[5] ?></td><td></td></tr>
        <tr></tr><tr></tr>
        <tr><td><font size="4.5" color="black">Adresse mail </font> </td><td><a href="index.php?page=modif_mail"><INPUT type="button" name="modif_mail" value="Modifier mon adresse mail"/></a></td></tr>
        <tr style="border-bottom:1px solid black;"><td><?php echo $a[2] ?></td><td></td></tr>
          <tr></tr><tr></tr>
        <tr style="border-bottom:1px solid black;"><td><font size="4.5" color="black">Mot de passe  </font></td><td><a href="index.php?page=modif_mdp"><INPUT type="button" name="modif_mdp" value="Modifier le mot de passe"/></a></td></tr>
      </table>

    </div>


  </body>
    <?php require 'Vues/footer.php'; ?>

  </html>
