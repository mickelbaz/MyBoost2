<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MyBoost - Le Site Web</title>
        <link rel="stylesheet" type="text/css" href="/MyBoost2/Contenu/headerFooter.css">

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

    </head>

  <?php if(isset($_SESSION['pseudo'])){?>
    <body>

<header>

    <div id="titre_principal">
        <div class="logo">
                <img src="Images/Logo4.png" alt="Logo de site web MyBoost"/>
                <h1>Un sport, un clic, une communauté!</h1>

        </div>
        <div class="deconnexion">
          <a href="index.php">Se déconnecter</a>
        </div>
    </div>

    <div class="search">
        <input type="text" name="name" placeholder="rechercher">
    </div>

    <nav>
        <ul class="menu">
            <li class="nav-item"><a href="index.php?page=accueil">Accueil</a></li>
            <li class="nav-item"><a href="index.php?page=profil">Mon Compte</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="index.php?page=sports">Liste des sports</a></li>
                  <li class="nav-item"><a href="index.php?page=ListeGroupes">Liste des groupes</a></li>
                  <li class="nav-item"><a href="index.php?page=creationGroupe">Créer un groupe</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a href="index.php?page=apropos">À Propos</a></li>
        </ul>
    </nav>

</header>

</body>

  <?php
  }
  else{ ?>

    <body>

<header>

    <div class="top_header">

        <div class="logo">

          <div class="image">
            <img src="Images/Logo4.png" alt="Logo de site web MyBoost"/>
          </div>

          <div class="slogan">
            <h1>Un sport, un clic, une communauté!</h1>
          </div>

        </div>

        <div class="boutons">

        <div class="inscription">
            <a href="index.php?page=inscription">Inscription</a>
        </div>

        <div class="connexion">
          <a href="index.php?page=connexion">Connexion</a>
        </div>

        </div>
<br></br>
    </div>
    <nav>
        <ul>
            <li class="nav-item"><a href="index.php">Accueil</a></li>

            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="index.php?page=sports">Liste des sports</a></li>
                </ul>
            </li>

            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a href="index.php?page=apropos">À Propos</a></li>
        </ul>
    </nav>

</header>

</body>
<?php
  }
  ?>
