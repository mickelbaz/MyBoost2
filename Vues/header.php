<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MyBoost - Le Site Web</title>
        <link rel="stylesheet" type="text/css" href="/MyBoost2/Contenu/headerFooter.css">
    </head>

  <?php if(isset($_SESSION['pseudo'])){?>
    <body>
<div id="bloc_page">
<header>

    <div id="titre_principal">
        <div class="logo">
                <img src="/MyBoost2/Images/Logo4.png" alt="Logo de site web MyBoost"/>
                <h1>Un sport, un clic, une communauté!</h1>
            </ul>
        </div>
        <div class="deconnexion">
          <a href="/MyBoost2/Controleurs/controleurDeconnexion.php">Se déconnecter</a>
        </div>
    </div>

    <div class="search">
        <input type="text" name="name" placeholder="rechercher">
    </div>
    
    <nav>
        <ul>
            <li class="nav-item"><a href="/MyBoost2/index.php">Accueil</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurProfil.php">Mon Compte</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurGroupes.php">Communauté</a>
            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurSports.php">Sports</a>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurApropos.php">À Propos</a></li>
        </ul>
    </nav>

</header>
</div>
</body>

  <?php
  }

  else{ ?>

    <body>
<div id="bloc_page">
<header>

    <div id="titre_principal">
        <div class="logo">
                <img src="/MyBoost2/Images/Logo4.png" alt="Logo de site web MyBoost"/>
                <h1>Un sport, un clic, une communauté!</h1>
            </ul>
        </div>
        <div class="inscription">
            <a href="/MyBoost2/Controleurs/controleurInscription.php">Inscription</a>
        </div>

        <div class="connexion">
          <a href="/MyBoost2/Controleurs/controleurConnexion.php">Connexion</a>
        </div>
    </div>
    <nav>
        <ul>
            <li class="nav-item"><a href="/MyBoost2/index.php">Accueil</a></li>

            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurGroupes.php">Communauté</a>
            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurSports.php">Sports</a>
            <li class="nav-item"><a href="/MyBoost2/Controleurs/controleurAPropos.php">À Propos</a></li>
        </ul>
    </nav>
    <div class="search">
        <input type="text" name="name" placeholder="rechercher">
    </div>
</header>
</div>
</body>
<?php
  }
  ?>
