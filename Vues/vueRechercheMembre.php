<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/recherche.css">

<h1>Résultat de la recherche</h1>


<h2>Membres :</h2>
<?php if(count($membre)==0){
  echo 'Aucun résulat';
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

<br></br>



<?php require 'Vues/footer.php' ?>
