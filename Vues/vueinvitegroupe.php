<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Groupe "<?php echo $donnees[0] ?>"</title>
  </head>

  <body>


<div class="head_groupe">

<div class="groupe">

  <h1 class="name_groupe">Groupe "<?php echo $donnees[0] ?>"<br>
<?php $dispo=$place[0]-count($membre);
if($dispo!=0 && isset($_SESSION['pseudo'])){?>
    <a href="#" onclick="if (confirm('Rejoindre ce groupe ?')) window.location='index.php?page=grouperejoint&groupe=<?php echo $donnees[0] ?>'; return false"><img id="logomodif" class="modifier" src="Images/plus.png"/><span class="modifier"> Rejoindre le groupe</span></a></h1>
  <?php
} ?>

  <div class="region">

      <h2>Région : <?php echo $donnees[3] ?></h2>

  </div>

</div>

<div class="sport">
<a href="index.php?page=sport&sport=<?php echo $donnees[1]?>"><h1 class="name_sport"><?php echo $donnees[1] ?></h1></a>
</div>

</div>



<div class=infos>

  <div class="admin_groupe">

    <p>
      Administrateur du groupe
    </p>

    <div class="name_admin">
      <table>
        <tr>
          <td style="width:3em;">
            <img src="Images/star.png" alt="" />
          </td>
          <td style="text-align:left; color:white; width:6em;">
            <p>
              <?php
            if($_SESSION['pseudo']==$admin[0]){?>
                <div class="membre"><a href="index.php?page=profil"><?php echo $admin[0] ?></a> </div>
              <?php
            }
            else{?>
              <div class="membre"> <a href="index.php?page=profilvoir&pseudo=<?php echo $admin[0] ?>"> <?php echo $admin[0] ?></a> </div>
              <?php
            }?>
            </p>
          </td>

        </tr>
      </table>


    </div>
  </div>

  <div class="description">

    <h2>Description du groupe</h2>

    <p>
      "<?php echo $donnees[2] ?>"
    </p>

  </div>


<div class="evenement">
  <img src="Images/calendar2.png" alt="" />
  <h2>Événements</h2>

<?php
  if(count($event)==0){?>
    <tr>Aucun événement</tr>
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

<div class="liste_membre">
  <img src="Images/users.png" alt="" />


<div><h2>Liste des membres</h2></div><br>
<?php
for($i=0;$i<count($membre);$i++){?>
<div class="membre"><?php echo $membre[$i][0] ?></div>
<?php
} ?>
</div>

</div>
<br></br>




<?php  require 'Vues/footer.php' ?>
