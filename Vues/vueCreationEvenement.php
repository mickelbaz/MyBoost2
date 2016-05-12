<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">


<FORM name="formulaire" method="post" action="">

	<p id="title">CRÉATION D'UN GROUPE</p>
	<table>

	<tr>
	<td>Nom du groupe</td>
	<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']) ;}?>"/></td>
	</tr>

  <?php require 'Vues/footer.php'; ?>
