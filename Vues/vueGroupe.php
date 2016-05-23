<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Groupe</title>
  </head>

  <body>

<div class="head_groupe">

<div class="groupe">

  <h1 class="name_groupe"><?php echo $donnees[0] ?><br><?php

  if ($_SESSION['pseudo']==$admin[0] ){?>

    <a href="index.php?page=modif_groupe&groupe=<?php echo $donnees[0]?>"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Modifier les infos du groupe</span></a>
    <a href="index.php?page=supprimer&supprimer=<?php echo $donnees[0]?>"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Supprimer le groupe</span></a></h1>
    <?php
  }
  else{?>
      <a href="index.php?page=quitter&quitter=<?php echo $donnees[0]?>"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Quitter le groupe</span></a></h1>
    <?php

  }?>

</div>


<div class="sport">
<h1 class="name_sport"><?php echo $donnees[1] ?></h1>
</div>


<br></br>

<div class=infos>
<div>
  <h2>Descritption du groupe :</h2>
  <br>
  "<?php echo $donnees[2] ?>"
</div>
<br></br>
<div>
  <h2>Région :</h2>
  <br>
  <?php echo $donnees[3] ?>
</div>
<br></br>
<div class="evenement">
  <h2>Evènements :&nbsp&nbsp&nbsp<a href="index.php?page=evenement&nom=<?php echo $donnees[0]?>"><INPUT type=button name="evenement" value="Créer un évènement"/></a></h2>
<br></br>
<h3>Evènements auxquels je participe : </h3>
<br></br>
    <?php
    if(count($mes_event)==0){?>
      <tr>Aucun évènement</tr>
      <?php
}
else{?>
    <table style="border-collapse:collapse;">
      <tr style="border-bottom:1px solid black;">
        <td>Nom</td><td>Decription</td><td>Date</td><td>Heure</td><td>Lieu</td></tr>
        <tr></tr>
      <tr>
        <?php
        $admin_event=array();
        $participants=array();
        for($i=0;$i<count($mes_event);$i++){
        $participants[$i]=nb($mes_event[$i][0]);
            for($j=0;$j<=4;$j++){?>
          <td><?php echo $mes_event[$i][$j]?></td>
        <?php
      }
      $admin_event[$i]=admin($mes_event[$i][0]);
      ?>
      <td><a href="index.php?page=nonparticiper&event=<?php echo $mes_event[$i][0]?>&nom=<?php echo $donnees[0]?>"><INPUT type="button" name="nonparticipe" value="Ne plus participer"/></a></td>
      <?php
      if($_SESSION['pseudo']==$admin_event[$i][0] || $_SESSION['pseudo']==$admin[0]){?>
        <td><a href="index.php?page=annuler&event=<?php echo $mes_event[$i][0]?>&nom=<?php echo $donnees[0]?>"><INPUT type="button" name="annuler" value="Annuler l'évènement"/></a></td>
        <?php
      }?>
        </tr>
        <?php
    }?>
    </table>
    <?php
  }?>

  <br></br>
  <br></br>

<h3>Autres évènements du groupe :</h3>
<br></br>
<?php
  if(count($event)==0){?>
    <tr>Aucun évènement</tr>
    <?php
  }
  else{?>
    <table style="border-collapse:collapse;">
      <tr style="border-bottom:1px solid black;">
        <td>Nom</td><td>Decription</td><td>Date</td><td>Heure</td><td>Lieu</td><td>Nombre de places disponibles</td></tr>
        <tr></tr>
      <?php

      $admin_event=array();
      $nombre=array();
      $nb_place=array();
      $dispo=array();
      for($i=0;$i<count($event);$i++){
        $nombre[$i]=count(nb($event[$i][0]));
        $nb_place[$i]=nombre_place($event[$i][0]);
        $dispo[$i]=$nb_place[$i][0] - $nombre[$i];
        $admin_event[$i]=admin($event[$i][0]);?>
        <tr>
        <?php
        for($j=0;$j<=4;$j++){?>
          <td><?php echo $event[$i][$j]?></td>
        <?php
      }
        if(0<$dispo[$i]){?>
          <td><?php echo $dispo[$i]?></td>
          <td><a href="index.php?page=participer&event=<?php echo $event[$i][0]?>&nom=<?php echo $donnees[0]?>"><INPUT type="button" name="participe" value="Participer à l'évènement"/></a></td>
            <?php
        }
        if($_SESSION['pseudo']==$admin_event[$i][0] || $_SESSION['pseudo']==$admin[0]){?>
          <td><a href="index.php?page=annuler&event=<?php echo $event[$i][0]?>&nom=<?php echo $donnees[0]?>"><INPUT type="button" name="annuler" value="Annuler l'évènement"/></a></td>
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

<div>
<h2>Administrateur :</h2>
<br>
<?php
if($_SESSION['pseudo']==$admin[0]){?>
    <div class="membre"><a href="index.php?page=profil"><?php echo $admin[0] ?></a> </div>
  <?php
}
else{?>
  <div class="membre"> <a href="index.php?page=profilvoir&pseudo=<?php echo $admin[0] ?>"> <?php echo $admin[0] ?></a> </div>
  <?php
}?>
</div>
<br></br>

<div><h2>Liste des membres :</h2></div><br>
<?php
for($i=0;$i<count($membre);$i++){
  if($_SESSION['pseudo']==$membre[$i][0]){?>
      <div class="membre"><a href="index.php?page=profil"><?php echo $membre[$i][0] ?></a></div>
    <?php
  }
  else{?>
    <div class="membre"> <a href="index.php?page=profilvoir&pseudo=<?php echo $membre[$i][0] ?>"> <?php echo $membre[$i][0] ?></a>
    <?php
      if($_SESSION['pseudo']==$admin[0]){?>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php?page=bannir&groupe=<?php echo $donnees[0]?>&membre=<?php echo $membre[$i][0]?>"><INPUT type="button" name="bannir" value="Supprimer ce membre"/></a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php?page=newadmin&groupe=<?php echo $donnees[0]?>&membre=<?php echo $membre[$i][0]?>"><INPUT type="button" name="bannir" value="Choisir comme nouvel administrateur"/></a>
      <?php
    }?>
    </div>
    <?php
  }?>


<?php
} ?>
</div>
<br></br>





<?php  require 'Vues/footer.php' ?>
