<?php require 'Vues/header.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/recherche.css">
    <title>Résultat de la recherche</title>
  </head>
  <body>
    <div class="content">

        <div class="title">
          <h1>Résultat de la recherche</h1>
        </div>


        <div class="result">
        <h2>Membres</h2>
        <?php if(count($membre)==0){?>
          <div class="aucun"><?php echo 'Aucun résulat';?></div>
          <?php
        }
        else{
          foreach($membre as list($nom)){
            if($_SESSION['pseudo']==$nom){?>
            <div class=liste> <a href="index.php?page=profil"><?php echo $nom ?> </a></div>
            <?php
            }
            else{?>
              <div class=liste> <a href="index.php?page=profilvoir&pseudo=<?php echo $nom ?>"><?php echo $nom ?> </a></div>
              <?php
            }
          }
        }?>
      </div>
        <br></br>
</div>
</body>
</html>

<?php require 'Vues/footer.php' ?>
