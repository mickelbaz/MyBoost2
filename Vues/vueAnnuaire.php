<?php require 'Vues/header.php'; ?>

<link type="text/css" rel="stylesheet" href="Contenu/liste_groupe.css"/>

<br></br>
<table style="border-collapse:collapse;">
  <thead>
      <tr style="border-bottom:1px solid black;">
          <th id="title" colspan="5">Annuaire</th>
      </tr>
  </thead>

  <tbody>
    <?php for($i=0;$i<count($membre);$i++){?>
      <tr>
      <td style="padding:1em;"><?php echo $membre[$i][0]; ?></td>
      <td><a href="index.php?page=profilvoir&pseudo=<?php echo $membre[$i][0] ?>"><INPUT type="button" name="voir" value="Voir le profil"/></a></td>
      <td>Ajouter <?php echo $membre[$i][0]?> au groupe :</td>
      <td>
      <SELECT>
      <OPTION value="title" selected>Choisir le groupe
      <?php for($j=0;$j<count($gpe);$j++){?>
      <OPTION><?php echo $gpe[$j][0];?></OPTION>
      <?php
      }?>
    </SELECT>
  </td>
</tr>
    <?php
    } ?>
</table>


<br></br>

<?php require 'Vues/footer.php' ?>
