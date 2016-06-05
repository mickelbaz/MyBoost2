<?php require_once 'Vues/header.php'; ?>

<title>Le Forum de MyBoost</title>
<link rel="stylesheet" type="text/css" href="Contenu/forum.css">


<body>
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
  Créer un sujet de discussion :
  <form name="nouveau_sujet" method="post" action="">
  <input type=text name="sujet" size="50" />
  <input type="submit" name="ok" value="OK"/>
</form>
  <?php
}?>

  <br></br>

</body>
<?php require_once 'Vues/footer.php' ?>
