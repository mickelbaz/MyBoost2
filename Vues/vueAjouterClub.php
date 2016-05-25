<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">


<FORM name="formulaire" method="post" action="">

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

<br></br>
  <?php require 'Vues/footer.php' ?>