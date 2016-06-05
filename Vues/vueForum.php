<?php require_once 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/forum.css">
    <title>Forum</title>
  </head>

<body>
  <div class="content">


  <br>
<table>
  <?php
  foreach($sujet as list($id,$nom)){?>
    <tr>
      <td><a href="index.php?page=sujet&id=<?php echo $id ?>&sujet=<?php echo $nom ?>"><?php echo $nom?></a></td>
      <?php
      if($_SESSION['pseudo']=='admin'){?>
          <td><a href="#" onclick="if (confirm('Supprimer ?')) window.location='index.php?page=supp_discussion&sujet=<?php echo $nom ?>&id=<?php echo $id ?>'; return false"><input type="button" name="supprimer" value="Supprimer cette discussion"/></a></td>
        <?php
      }?>
      </tr>
      <?php
  }
    ?>
</table>

    <br><br>

<?php if(isset($_SESSION['pseudo'])){?>
  <a href="index.php?page=afficher_creer_sujet"> <INPUT type="button" size="30" value="Créer un sujet de discussion !"/></a>
  <?php
}?>

  <br></br>
</div>
</body>


</html>
<?php require_once 'Vues/footer.php' ?>
