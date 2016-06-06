<?php require 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">
    <title>Club "<?php echo $infos[0][0] ?>"</title>
  </head>

  <body>
<div class="head_groupe">
<div class="salle">
  <h1 class="name_groupe"><?php echo $infos[0][0] ?><br></h1>
</div>
</div>
<div class="content">

  <div class="description">



    <div class="image_coordonnees">
      <img src="Images/home.png" />
    </div>

    <table style="border-collapse:collapse;">
      <thead>
          <tr style="border-bottom:1px solid black;">
              <th id="title" colspan="2">Coordonnées</th>
          </tr>
      </thead>
      <tr><td>Adresse :</td><td> <?php echo $infos[0][1]; ?></td></tr>
      <tr><td>Ville :</td><td> <?php echo $infos[0][3] ?></td></tr>
      <tr><td>Code Postal :</td><td> <?php echo $infos[0][2] ?></td></tr>
      <tr><td>Région :</td><td> <?php echo $infos[0][4] ?></td></tr>
    </table>

    <br></br>
    <div class="site">Pour plus d'informations, consultez le site internet : <a href="<?php echo $infos[0][5] ?>"><?php echo $infos[0][5] ?><a> </div>
    <br></br>
    <br></br>
  </div>
  <div class="description">

    <div class="commentaire">
      <h2>Votre avis sur "<?php echo $infos[0][0] ?>" nous intéresse !</h2>
    <FORM name="commenter" method="post" action="#">
    <br><br>
    <textarea name="commentaire" placeholder="Laissez votre commentaire ici" rows="4" cols="45"></textarea>
    <br></br>
    Note /5 <INPUT type="number" size="4" name="note" min="0" max="5"/>
    <br></br>
    <div class=Ok><INPUT type="submit" name='envoyer' value="OK"/></div>
    </FORM>
    </div>
    <br>

    <div class="commentaire"><h3>Tous les commentaires</h3>

    <?php foreach ($comment as list($pseudo,$date,$commentaire,$note)){
    echo $pseudo ?> le <?php echo $date  ?> :
    <br>
    <?php for ($i=0; $i < $note; $i++) { ?>
      <img src="Images/star.png" alt="" />
    <?php }  echo $commentaire?><br />
    <?php if($_SESSION['pseudo']=='admin'){?>
    <a href="#" onclick="if (confirm('Supprimer ce commentaire ?')) window.location='index.php?page=supprimer_commentaire&commentaire=<?php echo $commentaire?>'; return false"><INPUT type="button" name="supp" value="Supprimer ce commentaire" /></a>
      <?php
    }?>
    <br></br>
    <?php
    }
    if(count($comment)==0){?>
      Aucun commentaire
    <?php
    }?>
    </div>
    </div>
    <br></br>
</div>

</body>
</html>
<?php require 'Vues/footer.php' ?>
