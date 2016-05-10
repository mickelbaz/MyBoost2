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
                <img src="/MyBoost2/Images/Logo4.png" alt="Logo de site web MyBoost"/>
                <h1>Un sport, un clic, une communauté!</h1>

        </div>
        <div class="deconnexion">
          <a href="/MyBoost2/Controleurs/controleurDeconnexion.php">Se déconnecter</a>
        </div>
    </div>

    <div class="search">
        <input type="text" name="name" placeholder="rechercher">
    </div>

    <nav>
        <ul class="menu">
            <li class="nav-item"><a href="/MyBoost2/index.php">Accueil</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurProfil.php">Mon Compte</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurSports.php">Liste des sports</a></li>
                  <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurListeGroupes.php">Liste des groupes</a></li>
                  <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurCreationGroupes.php">Créer un groupe</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/vueForum.php">Forum</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurApropos.php">À Propos</a></li>
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
            <img src="/MyBoost2/Images/Logo4.png" alt="Logo de site web MyBoost"/>
          </div>

          <div class="slogan">
            <h1>Un sport, un clic, une communauté!</h1>
          </div>

        </div>

        <div class="boutons">

        <div class="inscription">
            <a href="/MyBoost2/Controleurs/controleurInscription.php">Inscription</a>
        </div>

        <div class="connexion">
          <a href="/MyBoost2/Controleurs/controleurConnexion.php">Connexion</a>
        </div>

        </div>
<br></br>
        <!--<div class="search">
            <input type="text" name="name" placeholder="rechercher">
        </div>-->
    </div>


    <nav>
        <ul>
            <li class="nav-item"><a href="/MyBoost2/index.php">Accueil</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
                <ul class="niveau 2">
                  <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurSports.php">Liste des sports</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurAPropos.php">À Propos</a></li>
        </ul>
    </nav>

</header>

</body>
<?php
  }
  ?>
