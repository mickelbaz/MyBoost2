<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="Contenu/headerFooter.css">
    </head>

    <body>


  <header>
  <div class="top_header_connection">

      <div class="logo">
        <a href="index.php?page=accueil"><img src="Images/Logo4.png" alt="Logo de site web MyBoost"/></a>
      </div>

      <div class="slogan">
        <h1>Un sport, un clic, une communauté!</h1>
      </div>

  </div>

  <div class="champs_connection">


    <h2>CONNEXION</h2>

    <FORM name="formulaireConnection" method="post" action="">
     <div class="champ1">
       <INPUT type="text" name="pseudo" placeholder="Pseudo"/>
       <br><br>
       <INPUT type="password" name="mot_de_passe" placeholder="Mot de passe"/>
        <p classe="oubli_mdp">
          <a href="index.php?page=accueil"><em>mot de passe oublié ?</em></a>
        </p>
    </div>


        <div class="champ2"><INPUT type="submit" name='connection' value="Valider" /></div>
    </FORM>

  </div>

</header>


</body>
<?php require 'Vues/footer.php'; ?>
