<html>
    <head>
        <meta charset="utf-8" />

        <link rel="stylesheet" type="text/css" href="/MyBoost2/Contenu/headerFooter.css">



    </head>

  <?php if(isset($_SESSION['pseudo'])){?>


    <body>
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

        <div class="bouton">

            <p>
              Bonjour, <?php echo $_SESSION['pseudo'] ?> !
            </p>

          <div class="deconnexion">
            <a href="index.php">Se déconnecter</a>
          </div>

        </div>


        <div class="search_connecte">
          <?php require_once 'Controleurs/controleurRecherche.php';
          $recherche=redirection();
          ?>
            <form name="recherche" method="post" action="">
            <input type="text" name="name" placeholder="rechercher"/>
            <input type="submit" name="valider_recherche" value="OK"/>
          </form>
        </div>

        <div class="search">
            <a href="index.php?page=rechercheavancee">recherche avancée</a>
        </div>
        <?php if($_SESSION['pseudo']=='admin'){?>
          <div class="administrer">
              <a href="index.php?page=admin">Administrer</a>
          </div>
          <?php } ?>
<br><br>

    <nav>

        <ul id="menu_connecte">
            <li class="nav-item"><a class="left" href="index.php?page=accueil">Accueil</a></li>
            <li class="nav-item"><a href="index.php?page=profil">Mon Compte</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="index.php?page=sports">Liste des sports</a></li>
                  <li class="nav-item"><a href="index.php?page=ListeGroupes">Liste des groupes</a></li>
                  <li class="nav-item"><a href="index.php?page=creationGroupe">Créer un groupe</a></li>
                  <li class="nav-item"><a href="index.php?page=salle">Liste des clubs</a></li>
                  <li class="nav-item"><a href ="index.php?page=annuaire">Annuaire</a></li>
                </ul>
            </li>

            <li class="nav-item"><a href="index.php?page=forum">Forum</a></li>

            <li class="nav-item"><a class="right" href="index.php?page=apropos">À Propos</a></li>

            </ul>
    </nav>
<br>
</header>

</body>
<?php }

  else{ ?>
    <body>
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

        <div class="bouton_deconnecte">

          <div class="inscription">
            <a href="index.php?page=inscription">Inscription</a>
          </div>

          <div class="connexion">
            <a href="index.php?page=page_accueil_connexion">Connexion</a>
          </div>

        </div>


    </div>



    <br><br>
    <nav>
        <ul id="menu_deconnecte">
            <li class="nav-item"><a class="left" href="index.php">Accueil</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="index.php?page=sports">Liste des sports</a></li>
                  <li class="nav-item"><a href="index.php?page=ListeGroupes">Liste des groupes</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="index.php?page=forum">Forum</a></li>
            <li class="nav-item"><a class="right" href="index.php?page=apropos">À Propos</a></li>
        </ul>

    </nav>
</header>
<br>

<script type="text/javascript">
sfHover = function() {
  var sfEls = document.getElementById("menu").getElementsByTagName("LI");
  for (var i=0; i<sfEls.length; i++) {
          sfEls[i].onmouseover=function() {
                  this.className+=" sfhover";
          }
          sfEls[i].onmouseout=function() {
                  this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
          }
  }
}
  if (window.attachEvent) window.attachEvent("onload", sfHover);
</script>

</body>
<?php
  }  ?>
