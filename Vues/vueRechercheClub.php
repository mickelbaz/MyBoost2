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
    <h2>Club</h2>
    <?php if(count($club)==0){
      echo 'Aucun résulat';
    }
    else{
      foreach($club as list($nom)){?>
        <div class=liste> <a href='index.php?page=club&club=<?php echo $nom?>'><?php echo $nom ?></a></div>

        <?php
      }
    }?>
  </div>
    <br></br>
</div>
</body>
</html>
<?php require 'Vues/footer.php' ?>
