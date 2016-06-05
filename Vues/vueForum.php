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

        <div class="image" style="text-align:center; margin-top:1em;">
          <img class="logo_loupe" src="Images/chat.png"/>
        </div>

        <div class="title">
          <h1>Forum</h1>
        </div>

      <div class="sujet">

        <h2>Sujets de discussion</h2>
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
    </div>
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
</div>
    </body>

</html>
<?php require_once 'Vues/footer.php' ?>
