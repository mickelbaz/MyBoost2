<?php require 'Vues/header.php';
      require 'Modeles/modeleSports.php';

?>


<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">


<FORM name="formulaire" method="post" action="">

	<p id="title">CRÉATION D'UN SPORT</p>
	<table>

	<tr>
	<td>Nom du sport</td>
	<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']) ;}?>"/></td>
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
      Description du sport
    </td>

    <td>
      <textarea name="description" rows="4" cols="45"></textarea>
    </td>
  </tr>

	</table>

	<br></br>

	<div class="C"><INPUT type="submit" name='envoyer' value="Valider" /></div>
	</FORM>
	<br></br>

<?php require 'Vues/footer.php'; ?>
