<?php require 'Vues/header.php'; ?>


<link rel="stylesheet" type="text/css" href="Contenu/recherche.css">


<div class="content">

<?php if($_GET['recherche']!=""){?>
  <div class="title"><h1>Résultat de la recherche "<?php echo $_GET['recherche']?>" </h1></div>
  <?php
}
else{?>
  <div class="title"><h1>Résultat de la recherche  </h1></div>
  <?php
}?>

<div class="tout">
<div class="groupe">
  <h2>Groupes :</h2>

    <?php
    if(count($groupe)==0){?>
      <div class="aucun"><?php echo "Aucun résultat";?></div>
      <?php
    }
    else{
    foreach($groupe as list($nom)){
      if(verif_membre_groupe($nom,$_SESSION['pseudo'])==false){?>
          <div class="liste"> <a href="index.php?page=groupe&groupe=<?php echo $nom?>"><?php echo $nom; ?></a> </div>
        <?php
      }
      else{?>
            <div class="liste"> <a href="index.php?page=groupevoir&groupe=<?php echo $nom?>"><?php echo $nom; ?></a> </div>
        <?php
      }
      }
    }?>

</div>

<div class="membre">
  <h2>Membres :</h2>
    <?php
    if(count($membre)==0){?>
      <div class="aucun"><?php echo "Aucun résultat"; ?></div>
      <?php
    }
    else{
    foreach($membre as list($nom)){
      if($_SESSION['pseudo']==$nom){?>
          <div class="liste"> <a href="index.php?page=profil"><?php echo $nom; ?> </a></div>
        <?php
      }
      else{?>
            <div class="liste"> <a href="index.php?page=profilvoir&pseudo=<?php echo $nom ?>"><?php echo $nom; ?> </a></div>
        <?php
      }
    }
  }
  ?>
</div>


<div class="club">
  <h2>Clubs :</h2>

    <?php
    if(count($club)==0){?>
      <div class="aucun"> <?php echo "Aucun résultat"; ?> </div>
      <?php
    }
    else{
    foreach($club as list($nom)){?>
      <div class="liste"> <a href="index.php?page=club&club=<?php echo $nom?>"><?php echo $nom; ?> </a></div>
      <?php
      }
    }?>

</div>

<div class="sport">
  <h2>Sports:</h2>
  <?php
  if(count($sport)==0){?>
  <div class="aucun"><?php  echo "Aucun résultat"; ?></div>
  <?php
  }
  else{
  foreach($sport as list($nom)){?>
    <div class="liste"><a href="index.php?page=sport&sport=<?php echo $nom ?>"><?php echo $nom; ?> </a></div>
    <?php
    }
  }?>
</div>
</div>

<br></br>
</div>
<?php require 'Vues/footer.php' ?>
