<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/admin.css">



<h2> Liste des groupes </h2>

<table class="infoperso" style="border-collapse:collapse;">
<?php foreach ($groupes as list($nom,$description,$region)) {?>
            <tr style="border-bottom:1px solid black;">
            <td><?php echo $nom ?><br />
             Description : <?php echo $description ?><br />
             Région : <?php echo $region?><br></td>
            <td>
            <?php
            if(verif_membre_groupe($nom,$_SESSION['pseudo'])==true){?>
            <a href="index.php?page=groupevoir&groupe=<?php echo $nom?>"><INPUT type="button" name="voir" value="Voir la page"/></a>
            <?php
          }
          else{?>
              <a href="index.php?page=groupe&groupe=<?php echo $nom?>"><INPUT type="button" name="voir" value="Voir la page"/></a>
            <?php
          }?>

          </td>
          <td><a href="index.php?page=modif_groupe_admin&groupe=<?php echo $nom?>"><INPUT type="button" name="modif" value="Modifer les informations"/></a>
            <td><a href="#" onclick="if (confirm('Supprimer ce groupe ?')) window.location='index.php?page=supprimer_groupe&groupe=<?php echo $nom?>'; return false"><INPUT type="button" name="supprimer" value="Supprimer le groupe"/></a></td>
           </tr>
           <tr></tr><tr></tr>


<?php
} ?>
</table>
<br></br>
<?php require 'Vues/footer.php' ?>
