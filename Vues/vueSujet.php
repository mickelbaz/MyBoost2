<?php require_once 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/forum.css">
    <title>Sujet "<?php echo $_GET['sujet'] ?>"</title>
  </head>

  <body>

  <h2> <?php echo $_GET['sujet'] ?> </h2>

  <?php

  if(count($message)==0){
    echo 'Aucun message';
  }
  else{

  foreach($message as list($message,$pseudo,$date,$heure)){?>
    <div class="message">
     - <?php echo $pseudo?> le <?php echo $date?> à <?php echo $heure ?> : <?php echo $message ?>
    <?php
    if($_SESSION['pseudo']=='admin'){?>
      <br><a href="#" onclick="if (confirm('Supprimer ?')) window.location='index.php?page=supp_message&message=<?php echo $message ?>&sujet=<?php echo $_GET['sujet']?>&id=<?php echo $_GET['id']?>'; return false"><input type="button" name="supp" value="Supprimer ce message"/></a>
        <?php
    }?>
  </div>
    <?php
    }
  }?>

  <br></br>
  <?php if(isset($_SESSION['pseudo'])){?>

  <form name="message" action="" method="post">

  <INPUT type="text" name="discussion" size="50" placeholder="Entrer votre message ici..."/>
  <input type="hidden" name="id" value="<?php echo($_GET["id"]); ?>">
  <input type="submit" name="Envoyer" value="Envoyer">

  </form>

  <?php
  }?>
    <br></br>
  <div>


    <br></br>
  </div>

  </body>
  
</html>
<?php require_once 'Vues/footer.php' ?>
