<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/recherche.css">

<h1>Résultat de la recherche</h1>


<h2>Club :</h2>
<?php if(count($club)==0){
  echo 'Aucun résulat';
}
else{
  foreach($club as list($nom)){?>
    <div class=liste> <a href='index.php?page=club&club=<?php echo $nom?>'><?php echo $nom ?></a></div>

    <?php
  }
}?>

<br></br>
<?php require 'Vues/footer.php' ?>
