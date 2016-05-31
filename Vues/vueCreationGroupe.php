<?php require 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">
		<title>Création d'un groupe</title>
	</head>
	<body>
		<div class="content">


		<div class="formulaire">


		<FORM name="formulaire" method="post" action="">

			<p id="title">CRÉATION D'UN GROUPE</p>
			<table>

			<tr>
			<td>Nom du groupe</td>
			<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']) ;}?>"/></td>
			</tr>
			<tr><td>Région</td>
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
			<td>Sport du groupe</td>
					<td><SELECT name="sport">
				    <OPTION value="title" selected>Sport
				  <?php foreach($sport as list($nom)){?>
				    <OPTION><?php echo $nom ?> </OPTION>
				    <?php
				  }?>
				</SELECT>
				</td>
		  </tr>



		  <tr>
		    <td>
		      Nombre de membres max
		    </td>
		    <td>
		      <INPUT type="number" name="nb" value="<?php if(isset($_POST['nb'])){ echo htmlentities($_POST['nb']);}?>" min="1" max="110"/>
		    </td>
		  </tr>

		  <tr>
		    <td>
		      Description du groupe
		    </td>

		    <td>
		      <textarea name="description" rows="4" cols="45"></textarea>
		    </td>
		  </tr>

			</table>

			<br></br>
			<!--<div class="B">Valider</div>-->
			<div class="C"><INPUT type="submit" name='envoyer' value="Valider" /></div>
			</FORM>
			</div>
			<br></br>
			</div>

	</body>
</html>




<?php require 'Vues/footer.php'; ?>
