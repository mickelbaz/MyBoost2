<!--<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="formulaire.css" />
	<title>MyBoost - Le Site Web</title>
	</head>

	<body>-->

<?php require '../Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../Contenu/formulaire.css">

<p>INSCRIPTION</p>
	<FORM name="formulaire" method="post" action="">
	<table>
	<tr>
	<td>Nom :</td>
	<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']);}?>"/></td>
	</tr>
	<tr>
	<td>Prénom :</td>
	<td><INPUT type="text" name="prenom" value="<?php if(isset($_POST['prenom'])){ echo htmlentities($_POST['prenom']);}?>"/> </td>
	</tr>
	<tr>
	<td>Pseudo :</td>
	<td><INPUT type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])){ echo htmlentities($_POST['pseudo']);}?>"/></td>
	</tr>
	<!--<tr>
	<tr></tr>
	<td colspan="2">Choisissez votre avatar ou importez une image :</td>
	</tr>
	<tr>
	<td><INPUT type="checkbox" name="img1"/><img src="../Images/avatar1.png"/></td>
	<td><INPUT type="checkbox" name="img2"/><img src="../Images/avatar2.png"/></td>
	<td><INPUT type="checkbox" name="img3"/><img src="../Images/avatar3.png"/></td>
	<td><INPUT type="checkbox" name="img4"/><img src="../Images/avatar4.png"/></td>
	<td class="A"><INPUT type="file" name="img"/></td>
	</tr>
	<tr></tr><tr></tr>-->
	<tr>
	<td>Sexe :</td>
	<td> <INPUT type="radio" name="sexe" value="F" <?php if(isset($_POST['sexe']) && $_POST["sexe"]=="F"){?> checked <?php }?>/><label for="F">Féminin</label>&nbsp&nbsp&nbsp
		<INPUT type="radio" name="sexe" value="H" <?php if(isset($_POST['sexe']) && $_POST["sexe"]=="H"){?> checked <?php }?> /><label for="H">Masculin</label></td>
	</tr>
	<tr>
	<td>Date de naissance :</td>
	<td>

	<SELECT name="jour">
		<OPTION value="title" selected>Jour
		<?php for($jour=1; $jour<=31; $jour++):
			if($jour<10){?>
				<option value="<?php echo '0'; echo $jour?>" <?php if(isset($_POST['jour']) && $_POST["jour"]=="0$jour"){?> selected <?php }?>/><?php echo '0'; echo $jour;
			}
			else{?>
				<option value="<?php echo $jour?>" <?php if(isset($_POST['jour']) && $_POST["jour"]=="$jour"){?> selected <?php }?>><?php echo $jour;
			}
			endfor;?>
	</SELECT>

<SELECT name="mois">
	<OPTION value="title" selected>Mois
	<?php for($mois=1; $mois<=12; $mois++):
		if($mois<10){?>
			<option value="<?php echo '0'; echo $mois?>" <?php if(isset($_POST['mois']) && $_POST["mois"]=="0$mois"){?> selected <?php }?>><?php echo '0'; echo $mois;
		}
		else{?>
			<option value="<?php echo $mois?>" <?php if(isset($_POST['mois']) && $_POST["mois"]=="$mois"){?> selected <?php }?>><?php echo $mois;
		}
		endfor ;?>
</SELECT>

	<SELECT name="annee">
		<OPTION value="title" selected>Année
		<?php for($annee=2016; $annee>=1915; $annee--):?>
		<option value="<?php echo $annee?>" <?php if(isset($_POST['annee']) && $_POST["annee"]=="$annee"){?> selected <?php }?>><?php echo $annee;
		endfor ;?>
	</SELECT>


</td>
	</tr>
	<tr>
	<td>Adresse :</td>
	<td><INPUT type="text" name="adresse" size="28" value="<?php if(isset($_POST['adresse'])){ echo htmlentities($_POST['adresse']);}?>"/></td>
	<td> Code postal :&nbsp&nbsp<INPUT type="text" name="code_postal" size="10"
	value ="<?php if(isset($_POST['code_postal'])){ echo htmlentities($_POST['code_postal']);}?>"/></td>
	<td>Ville :&nbsp&nbsp<INPUT type="text" name="ville" value="<?php if(isset($_POST['ville'])){ echo htmlentities($_POST['ville']);}?>"/></td>
	</tr>
	<tr>
	<td>Pays :</td>
	<td><INPUT type="text" name="pays" size="28" value="<?php if(isset($_POST['pays'])){ echo htmlentities($_POST['pays']);}?>"/></td>
	</tr>
	<tr>
	<td>Téléphone :</td>
	<td><INPUT type="text" name="tel" size="28" value="<?php if(isset($_POST['tel'])){ echo htmlentities($_POST['tel']);}?>"/></td>
	</tr>
	<tr>
	<td>Adresse mail :</td>
	<td><INPUT type="email" name="mail" size="28" value="<?php if(isset($_POST['mail'])){ echo htmlentities($_POST['mail']);}?>"/></td>
	</tr>
	<tr>
	<td>Confirmation de l'adresse mail :</td>
	<td><INPUT type="email" name="mail2" size="28" value="<?php if(isset($_POST['mail2'])){ echo htmlentities($_POST['mail2']);}?>"/></td>
	</tr>
	<tr>
	<td>Mot de passe :</td>
	<td><INPUT type="password" name="mot_de_passe" size="28" value="<?php if(isset($_POST['mot_de_passe'])){ echo htmlentities($_POST['mot_de_passe']);}?>"/></td>
	</tr>
	<tr>
	<td>Confirmation du mot de passe :</td>
	<td><INPUT type="password" name="mot_de_passe2" size="28" value="<?php if(isset($_POST['mot_de_passe2'])){ echo htmlentities($_POST['mot_de_passe2']);}?>"/></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
	<td colspan="2"><INPUT type="checkbox" name="condition" value="1" <?php if(isset($_POST['condition']) && $_POST['condition']=="1"){?> checked <?php } ?>/><em>&nbsp J'accepte les conditions générales du site</em></td>
	</tr>
	<tr>
	<td colspan="2"><INPUT type="checkbox" name="news"/><em>&nbsp Je souhaite m'abonner à la newsletter</em></td>
	</tr>
	</table>

	<br></br>
	<!--<div class="B">Valider</div>-->
	<div class="C"><INPUT type="submit" name='envoyer' value="Valider" /></div>
	</FORM>

<?php require '../Vues/footer.php'; ?>

<!--</html>-->
