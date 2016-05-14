<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Mon groupe</title>
  </head>

  <body>


<div class="head_groupe">

<div class="groupe">

  <h1 class="name_groupe"><?php echo $donnees[0] ?><br>
      <a href="index.php?page=grouperejoint&groupe=<?php echo $donnees[0] ?>"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Rejoindre le groupe</span></a></h1>
</div>


<div class="sport">
<h1 class="name_sport"><?php echo $donnees[1] ?></h1>
</div>
</div>

<br></br>

<div class=infos>
<div>
  <h2>Descritption du groupe :</h2>
  <br>
  <?php echo $donnees[2] ?>
</div>
<br></br>

<div class="evenement">
  <h2>Evènements :</h2>
<br></br>
<?php
  if(count($event)==0){?>
    <tr>Aucun évènement</tr>
    <?php
  }
  else{?>
    <table style="border-collapse:collapse;">
      <tr style="border-bottom:1px solid black;">
        <td>Nom</td><td>Decription</td><td>Date</td><td>Heure</td><td>Nombre de places disponibles</td></tr>
        <tr></tr>
      <?php
      $nombre=array();
      $nb_place=array();
      $dispo=array();
      for($i=0;$i<count($event);$i++){
        $nombre[$i]=count(nb($event[$i][0]));
        $nb_place[$i]=nombre_place($event[$i][0]);
        $dispo[$i]=$nb_place[$i][0] - $nombre[$i];?>
        <tr>
        <?php
        for($j=0;$j<4;$j++){?>
          <td><?php echo $event[$i][$j]?></td>
        <?php
      }
        if(0<$dispo[$i]){?>
          <td><?php echo $dispo[$i]?></td>
            <?php
        }

      if($dispo[$i]==0){?>
        <td>Plus de places disponibles</td>
        <?php
      }?>
      </tr>
      <?php
    }?>
    </table>
    <?php
  }?>
</div>
<br></br>
<br></br>

<div class="membres">
<div>
<h2>Administrateur :</h2></div>
<br>
<div class="membre"><?php echo $admin[0] ?></div>

<br></br>

<div><h2>Liste des membres :</h2></div><br>
<?php
for($i=0;$i<count($membre);$i++){?>
<div class="membre"><?php echo $membre[$i][0] ?></div>
<?php
} ?>
</div>
</div>
<br></br>




<?php  require 'Vues/footer.php' ?>
