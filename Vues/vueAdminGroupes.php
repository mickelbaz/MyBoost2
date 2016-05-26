<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/admin.css">

<?php $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION)); ?>

<h2> Liste les groupes </h2>

<?php
$reponse=$bdd->query('SELECT * FROM groupe');

while ($donnees = $reponse->fetch()){

  ?> <p>
             Nom du groupe : <?php echo $donnees['nom']; ?><br>
             Description : <?php echo $donnees['description']; ?><br>
             Capacité maximale : <?php echo $donnees['nb_max']; ?><br>
             Sport(s) affilié(s) au groupe :<?php echo $donnees['sport_groupe']; ?> <br>
             Id : <?php echo $donnees['team_ID']; ?><br>
             Zone géographique : <?php echo $donnees['region'];?><br>

     </p>
<?php
} ?>
<?php require 'Vues/footer.php' ?>
