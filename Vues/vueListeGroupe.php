<?php require 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="Contenu/liste_groupe.css"/>
    <title>Liste des groupes</title>
  </head>
  <body>

    <br></br>
    <?php if(isset($_SESSION['pseudo'])){?>
    <table style="border-collapse:collapse;">
      <thead>
          <tr>
            <th colspan="3">
              <img src="Images/group2.png" style="margin-bottom:1em;" />
            </th>
          </tr>
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
            <tr style="margin:1em;">
            <td style="text-align:center; padding:1em; width:auto;"><div style="border-radius:2em; background-color: #2e2981; padding:1em; color:white;"><?php echo $liste[$i][0]; ?></div></td>
            <td><a href="index.php?page=groupevoir&groupe=<?php echo $liste[$i][0]; ?>"><INPUT type="button" name="voir" value="Voir la page"/></a></td>
            <?php
            if($dispo[$i]!=0){?>
              <td style="text-align:left;"><a href="#" onclick="if (confirm('Rejoindre ce groupe ?')) window.location='index.php?page=grouperejoint&groupe=<?php echo $liste[$i][0] ?>'; return false"><INPUT type="button" name="<?php echo $i ?>" value="Rejoindre ce groupe" /></a></td>

            <?php
            }
            else{?>
              <td><em>Plus de places disponibles</em></td>
              <td><a href="#" onclick="if (confirm('Recevoir une notification si une place se libère ?')) window.location='index.php?page=recevoir_notif&groupe=<?php echo $liste[$i][0] ?>'; return false"><INPUT type="button" name="notif" value="Recevoir une notification"/></td></a>
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
         <br>
        </tbody>
      </table>
      <?php
    }

    else { ?>
      <table style="border-collapse:collapse;">
        <thead>
            <tr style="border-bottom:1px solid black;">
                <th id="title" colspan="2">Liste des groupes</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($liste);$i++){?>
              <tr style="border-bottom:1px solid black;">
              <td style="padding:1em;"><?php echo $liste[$i][0]; ?></td>
              <td><a href="index.php?page=groupevoir&groupe=<?php echo $liste[$i][0] ?>"><INPUT type="button" name="voir" value="Voir la page"/></a></td>
            </tr>
              <?php
        }?>
        </table>
        <?php
    }?>
      <br></br>

  </body>
</html>





<?php require 'Vues/footer.php'; ?>
