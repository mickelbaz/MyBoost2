<?php require 'Vues/header.php'; ?>

<link type="text/css" rel="stylesheet" href="Contenu/liste_groupe.css"/>

<br></br>
<table style="border-collapse:collapse;">
  <thead>
      <tr style="border-bottom:1px solid black;">
          <th id="title" colspan="2">Annuaire</th>
      </tr>
  </thead>

  <tbody>
    <?php for($i=0;$i<count($membre);$i++){?>
      <tr>
      <td style="padding:1em;"><?php echo $membre[$i][0]; ?></td>
      <td><a href="index.php?page=profilvoir&pseudo=<?php echo $membre[$i][0] ?>"><INPUT type="button" name="voir" value="Voir le profil"/></a></td>
     </tr>
    <?php
    } ?>
</table>
<br></br><br></br>
<FORM name="ajout" method="post" action="">
<div class="ajout">
Inviter &nbsp
<SELECT name="pseudo">
<OPTION value="title" selected>membre
<?php for($i=0;$i<count($membre);$i++){?>
  <OPTION><?php echo $membre[$i][0];
}?>
</SELECT>
&nbsp au groupe &nbsp
<SELECT name="groupe">
  <OPTION value="title" selected>Choisir le groupe
  <?php for($i=0;$i<count($gpe);$i++){?>
    <OPTION><?php echo $gpe[$i][0];
  }?>
  </SELECT>
  &nbsp&nbsp&nbsp&nbsp<INPUT type="submit" name="envoyer" value="OK"/>
</div>
</FORM>



<br></br>

<?php require 'Vues/footer.php' ?>
