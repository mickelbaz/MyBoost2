<?php require 'Vues/header.php' ?>
<link rel="stylesheet" type="text/css" href="Contenu/admin.css">

<!--<h2> Gérer les membres </h2>
<br></br>

<table>
//<?php
//foreach($membres as list ($nom,$mail)){?>
  <tr>
  <td> <?php// echo $nom ?> (<?php //echo $mail ?>)</td>

  <td><a href="index.php?page=profilvoir&pseudo=<?php echo $nom?>"><INPUT type="button" name="voir" value="Voir le profil"/></td></a>
  <td><a href="#" onclick="if (confirm('Supprimer ce membre ?')) window.location='index.php?page=supprimer_personne&pseudo=<?php echo $nom?>'; return false"><INPUT type="button" name="supprimer" value="Supprimer le membre"/></td></a>
  <td><a href="#" onclick="if (confirm('Bannir ce membre ?')) window.location='index.php?page=bannir_personne&pseudo=<?php echo $nom?>&mail=<?php echo $mail?>'; return false"><INPUT type="button" name="bannir" value="Bannir ce membre"/></td></a>
</tr>
<?php
//} ?>
</table>
<br></br>-->


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
