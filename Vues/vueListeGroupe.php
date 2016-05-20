<?php require 'Vues/header.php'; ?>

<link type="text/css" rel="stylesheet" href="Contenu/liste_groupe.css"/>

<br></br>
<table style="border-collapse:collapse;">
  <thead>
      <tr style="border-bottom:1px solid black;">
          <th id="title" colspan="3">Liste des groupes</th>
      </tr>
  </thead>

  <tbody>
    <?php
      $nombre=array();
      $nb_place=array();
      $dispo=array();
      for($i=0;$i<count($liste);$i++){
        $nombre[$i]=count(recupmembre($liste[$i][0]));
        $nb_place[$i]=recup_place($liste[$i][0]);
        $dispo[$i]=$nb_place[$i][0] - $nombre[$i];
         ?>
        <tr style="border-bottom:1px solid black;">
        <td style="padding:1em;"><?php echo $liste[$i][0]; ?></td>
        <td><a href="index.php?page=groupevoir&groupe=<?php echo $liste[$i][0] ?>"><INPUT type="button" name="voir" value="Voir la page"/></a></td>
        <?php
        if($dispo[$i]!=0){?>
          <td><a href="#" onclick="if (confirm('Rejoindre ce groupe ?')) window.location='index.php?page=grouperejoint&groupe=<?php echo $liste[$i][0] ?>'; return false"><INPUT type="button" name="<?php echo $i ?>" value="Rejoindre ce groupe" /></a></td>
        <?php
        }
        else{?>
          <td><em>Plus de places disponibles</em></td>
          <?php
        }
        ?>
        </tr>
        <?php
        }
        if(count($liste)==0){?>
          <tr><td>Aucun groupe disponible</td></tr>
          <?php
        }
     ?>
    </tbody>
  </table>
  <br></br>

<?php require 'Vues/footer.php'; ?>
