<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="Contenu/admin.css">
<h2> Liste des membres du site MyBoost !</h2>
<?php

	$bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

?>

<?php
$reponse = $bdd->query('SELECT * FROM sportif');


while ($donnees = $reponse->fetch())
{
  ?>

	<p>
					Nom : <?php echo $donnees['nom']; ?><br />
					Prenom : <?php echo $donnees['prenom']; ?><br />
    			Pseudo : <?php echo $donnees['pseudo']; ?><br />
		 			Civilité :<?php echo $donnees['sexe']; ?> <br />
	</p>


<br>

<?php
 }?>

<?php require 'Vues/footer.php' ?>
