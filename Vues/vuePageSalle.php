<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/profilGroupe.css">

  <head>
    <meta charset="utf-8" />
    <title>Salle</title>
  </head>

  <body>
<div class="head_groupe">
<div class="salle">
  <h1 class="name_groupe"><?php echo $infos[0][0] ?><br></h1>
</div>
</div>
<br></br>

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
<div class="commentaire">Votre avis nous intéresse !
  <br></br>
<FORM name="commenter" method="post" action="#">
<INPUT type="text" name="club" size="5" value="<?php echo $infos[0][0]?>"/>
<br><br>
<textarea name="commentaire" placeholder="Laissez votre commentaire ici" rows="4" cols="45"></textarea>
<br></br>
Note /10 : &nbsp&nbsp&nbsp&nbsp <INPUT type="text" size="4" name="note"/>
<br></br>
<div class=Ok><INPUT type="submit" name='envoyer' value="OK"/></div>
</FORM>
</div>
<br></br>
<br></br>

<div class="commentaire"><b>Tous les commentaires :</b>
<br></br>
<?php foreach ($comment as list($pseudo,$date,$commentaire,$note)){
echo $pseudo ?>&nbsp&nbsp&nbsp le <?php echo $date  ?> :
<br>
<?php echo $note ?>/10 : <?php echo $commentaire?>
<br></br>
<?php
}?>
<?php if(count($comment)==0){?>
  Aucun commentaire
<?php
}?>
</div>
<br></br>

<?php require 'Vues/footer.php' ?>
