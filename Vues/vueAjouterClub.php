<?php require 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">
		<title>Ajouter un club</title>
	</head>
	<body>

<div class="content">
	<div class="formulaire">
		<FORM name="formulaire" method="post" action="">

			<div class="image" style="text-align:center; margin-top:1em;">
				<img class="logo_loupe" src="Images/locker.png"/>
			</div>

	<p id="title">AJOUTER UN CLUB</p>
	<table>

	<tr>
	<td>Nom du club</td>
	<td><INPUT type="text" name="nom" size="28" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']) ;}?>"/></td>
	</tr>
  <tr>
  <td>Adresse </td>
  <td><INPUT type="text" name="adresse" size="28" value="<?php if(isset($_POST['adresse'])){ echo htmlentities($_POST['adresse']);}?>"/></td>
  <td> Code postal &nbsp&nbsp<INPUT type="text" name="code_postal" size="10"
  value ="<?php if(isset($_POST['code_postal'])){ echo htmlentities($_POST['code_postal']);}?>"/></td>
  <td>Ville &nbsp&nbsp<INPUT type="text" name="ville" value="<?php if(isset($_POST['ville'])){ echo htmlentities($_POST['ville']);}?>"/></td>
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
	<td>Site internet</td>
  <td><INPUT type="text" name="site" size ="28" value="<?php if(isset($_POST['site'])){ echo htmlentities($_POST['site']) ;}?>"/></td>
</tr>
</table>

<br></br>

<div class="C"><INPUT type="submit" name='envoyer' value="Valider" /></div>
</FORM>
</div>
<br></br>
</div>

</body>
</html>

  <?php require 'Vues/footer.php' ?>
