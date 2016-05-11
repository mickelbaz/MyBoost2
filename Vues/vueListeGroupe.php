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
      for($i=0;$i<count($liste);$i++){?>
        <tr style="border-bottom:1px solid black;">
        <td style="padding:1em;"><?php echo $liste[$i][0]; ?></td>
        <td><a href="index.php?page=groupe&groupe=<?php echo $liste[$i][0] ?>"><INPUT type="button" name="voir" value="Voir la page"/></a></td>
        <td><a href="index.php?page=grouperejoint&groupe=<?php echo $liste[$i][0] ?>"><INPUT type="button" name="<?php echo $i ?>" value="Rejoindre ce groupe" /></a></td></form>
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
