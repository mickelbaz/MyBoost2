<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Mon groupe</title>
  </head>

  <body>

<div class="head_groupe">

<div class="groupe">

  <h1 class="name_groupe"><?php echo $donnees[0] ?><br><a href="vue/Profil/Modif_compte.php"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Modifier les infos du groupe</span></a></h1>


</div>


<div class="sport">
<h1 class="name_sport"><?php echo $donnees[1] ?></h1>
</div>
</div>

<br>
<!--<div class="tout">-->
<div>
  <h2>Descritption du groupe :</h2>
  <br>
  <?php echo $donnees[2] ?>
</div>
<br></br>

<div class="evenement">
  <h2>Evènements :</h2>
  <INPUT type=button name="evenement" value="Créer un évènement"/>
</div>

<!--</div>-->

<div>
<h2>Administrateur :</h2>
<br>
<?php echo $admin[0] ?>
</div>
<br></br>

<div><h2>Liste des membres :</h2></div><br>
<?php
for($i=0;$i<count($membre);$i++){?>
  <div class="membre"> <?php echo $membre[$i][0] ?>  </div>
<?php
} ?>






<?php  require 'Vues/footer.php' ?>
