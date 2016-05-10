<?php require '../Vues/header.php'; ?>

<link type="text/css" rel="stylesheet" href="../Contenu/liste_groupe.css"/>

<br></br>
<table style="border-collapse:collapse;">
  <thead>
      <tr style="border-bottom:1px solid black;">
          <th id="title" colspan="3">Liste des groupes</th>
      </tr>
  </thead>

  <tbody>
    <?php for($i=0;$i<count($liste);$i++){?>
      <tr style="border-bottom:1px solid black;">
          <td style="padding:1em;"><?php echo $liste[$i][0]; ?></td>
          <td><INPUT type="button" name="voir" value="Voir la page"/></td>
          <td><INPUT type="button" name="rejoindre" value="Rejoindre ce groupe"/></td>
      </tr>
    <?php
    } ?>

    </tbody>
  </table>
  <br></br>

<?php require '../Vues/footer.php'; ?>
