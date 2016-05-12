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
</div>

<br>

<div>
  <h2>Descritption du groupe :</h2>
  <br>
  <?php echo $donnees[2] ?>
</div>
<br></br>

<div class="evenement">
  <h2>Evènements :&nbsp&nbsp&nbsp<a href="index.php?page=evenement&nom=<?php echo $donnees[0]?>"><INPUT type=button name="evenement" value="Créer un évènement"/></a></h2>
<br>
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
        <td><a href="index.php?page=participer&event=<?php echo $event[$i][0]?>&nom=<?php echo $donnees[0]?>"><INPUT type="button" name="participe" value="Participer à l'évènement"/></a></td>
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
