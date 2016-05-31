<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/recherche.css">

<h1>Résultat de la recherche</h1>


<h2>Groupes :</h2>
<?php if(count($groupe)==0){
  echo 'Aucun résulat';
}
else{
  foreach($groupe as list($nom)){
    if(verif_membre_groupe($nom,$_SESSION['pseudo'])==true){?>
    <div class=liste> <a href="index.php?page=groupevoir&groupe=<?php echo $nom ?>"><?php echo $nom ?> </a></div>
    <?php
    }
    else{?>
      <div class=liste> <a href="index.php?page=groupe&groupe=<?php echo $nom ?>"><?php echo $nom ?> </a></div>
      <?php
    }
  }
}?>

<br></br>



<?php require 'Vues/footer.php' ?>
