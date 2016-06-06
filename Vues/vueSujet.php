<?php require_once 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/forum.css">
    <title>Sujet "<?php echo $_GET['sujet'] ?>"</title>
  </head>

  <body>

    <div class="content">
<a href="index.php?page=forum" style="position: absolute; left: 4em; top:17em;"><img src="Images/back-2.png" alt="" /></a>
      <div class="image" style="text-align:center; margin-top:1em; ">
        <img class="logo_loupe" src="Images/chat.png"/>
      </div>

    <div class="title">
      <h2>Sujet de discussion : "<?php echo $_GET['sujet'] ?>" </h2>
    </div>

    <div class="sujet">
<br>

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
  <br></br>
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
  </div>
</div>
  </body>

</html>
<?php require_once 'Vues/footer.php' ?>
