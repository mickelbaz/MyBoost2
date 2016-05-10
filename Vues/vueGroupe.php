<?php require '../Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Mon groupe</title>
  </head>

  <body>

<div class="head_groupe">

<div class="groupe">

  <h1 class="name_groupe"><?php echo $a[0] ?><br><a href="vue/Profil/Modif_compte.php"><img id="logomodif" class="modifier" src="../Images/modif.png"/><span class="modifier"> Modifier les infos du groupe</span></a></h1>



</div>


<div class="sport">
<h1 class="name_sport"><?php ?></h1>
</div>

</div>

  </body>

<?php  require '../Vues/footer.php' ?>
