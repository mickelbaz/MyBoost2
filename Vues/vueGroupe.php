<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Mon groupe</title>
  </head>

  <body>

<div class="head_groupe">

<div class="groupe">

  <h1 class="name_groupe"><?php echo $donnees[0] ?><br><?php
  if ($_SESSION['pseudo']==$admin[0] ){?>
    <a href="index.php?page=modif_groupe"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Modifier les infos du groupe</span></a></h1><?php
  }?>


</div>


<div class="sport">
<h1 class="name_sport"><?php echo $donnees[1] ?></h1>
</div>


<br>
<div>
  <h2>Descritption du groupe :</h2>
  <br>
  <?php echo $donnees[2] ?>
</div>
<br></br>
<div>
  <h2>Administrateur :</h2>
  <br>
  <?php echo $admin[0] ?>
<br></br>

<div class="liste"><h4>Liste des groupes</h4></div>
<div class="membre">
<?php
for($i=0;$i<count($membre);$i++){?>
      <div class="membre"> <?php echo $membre[$i][0] ?>  </div>
  <?php
  } ?>
</div>


<?php  require 'Vues/footer.php' ?>
