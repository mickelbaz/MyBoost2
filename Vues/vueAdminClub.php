<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/admin.css">



<h2> Liste des groupes </h2>

<table class="infoperso" style="border-collapse:collapse;">
  <?php foreach($club as list($nom)){?>
      <tr style="border-bottom:1px solid black;">
        <td><?php echo $nom ?></td>
        <td><a href="index.php?page=club&club=<?php echo $nom?>"><INPUT type="button" name="voir" value="Voir la page"/></a></td>
        <td><a href="#" onclick="if (confirm('Supprimer ce club ?')) window.location='index.php?page=supprimer_club&club=<?php echo $nom?>'; return false"><INPUT type="button" name="supprimer" value="Supprimer ce club"/></a></td>
      </tr>

    <?php
  }?>
</table>

<br></br>

<?php require 'Vues/footer.php' ?>
