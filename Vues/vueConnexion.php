<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MyBoost - Le Site Web</title>
        <link rel="stylesheet" type="text/css" href="Contenu/headerFooter.css">
          <link rel="stylesheet" type="text/css" href="Contenu/accueil.css">
    </head>

    <body>
<div id="bloc_page">

  <header>
  <div class="top_header">

    <div class="titre_principal">

      <div class="logo">
        <a href="index.php?page=accueil"><img src="Images/Logo4.png" alt="Logo de site web MyBoost"/></a>
      </div>

        <div class="slogan">
          <h1>Un sport, un clic, une communauté!</h1>
        </div>

    </div>

        <FORM name="formulaireConnection" method="post" action="">
         <div class="champ1"> <INPUT type="text" name="pseudo" placeholder="Pseudo"/>
            <br></br>
            <INPUT type="password" name="mot_de_passe" placeholder="Mot de passe"/></div>
            <br></br>
            <div class="champ2"><INPUT type="submit" name='connection' value="Valider" /></div>
      </FORM>

    </div>
    <nav>
        <ul id="menu_deconnecte">
            <li class="nav-item"><a class="left" href="index.php">Accueil</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="index.php?page=sports">Liste des sports</a></li>
                  <li class="nav-item"><a href="index.php?page=ListeGroupes">Liste des groupes</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a class="right" href="index.php?page=apropos">À Propos</a></li>
        </ul>
        <br><br>
    </nav>
</header>




</body>
<?php require 'Vues/footer.php'; ?>
