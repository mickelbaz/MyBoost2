<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">

<p id="title">INSCRIPTION</p>

<p id="sous_titre">* Tous les champs sont obligatoires</p>
<br></br>
	<FORM name="formulaire" method="post" action="" enctype="multipart/form-data">

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
	<tr><td>Région :</td>
		<td><SELECT name="region">
  <OPTION value="title" selected>Sélectionnez votre région
	<OPTION>Alsace
	<OPTION>Aquitaine
	<OPTION>Auvergne
	<OPTION>Basse-Normandie
	<OPTION>Bourgogne
	<OPTION>Bretagne
	<OPTION>Centre
	<OPTION>Champagne-Ardenne
	<OPTION>Corse
	<OPTION>Franche-Comté
	<OPTION>Haute-Normandie
	<OPTION>Île-de-France
	<OPTION>Languedoc-Roussillon
	<OPTION>Limousin
	<OPTION>Lorraine
	<OPTION>Midi-Pyrénées
	<OPTION>Nord-Pas-de-Calais
	<OPTION>Pays de la Loire
	<OPTION>Picardie
	<OPTION>Poitou-Charentes
	<OPTION>Provence-Alpes-Côte d'Azur
	<OPTION>Rhône-Alpes
  <OPTION>Guadeloupe
  <OPTION>Guyane
  <OPTION>La Réunion
  <OPTION>Martinique
  <OPTION>Mayotte
  </SELECT>
</td>
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
		<td>
			<label>Avatar :</label>
		</td>
		<td>
			<input type="file" name="avatar" />
		</td>
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

	</table>

	<br></br>
	<!--<div class="B">Valider</div>-->
	<div class="C"><INPUT type="submit" name='envoyer' value="Valider" /></div>
	</FORM>
	<br></br>

<?php require 'Vues/footer.php'; ?>

<!--</html>-->
