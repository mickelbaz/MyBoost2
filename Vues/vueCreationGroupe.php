<?php require '../Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="../Contenu/formulaire.css">


<FORM name="formulaire" method="post" action="">

	<p>CRÉATION DU GROUPE</p>
	<table>

	<tr>
	<td>Nom du groupe</td>
	<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']);}?>"/></td>
	</tr>

	<tr>
	<td>Sport du groupe</td>
  <td>
    <SELECT name="sport">
      <OPTION value="title" selected>Sport
      <OPTION>Tennis
      <OPTION>Football
      <OPTION>Ping-Pong
      <OPTION>Basketball
      <OPTION>Jogging
      <OPTION>Golf
      <OPTION>Boxe
      <OPTION>Curling
    </SELECT>
  </td>
  </tr>

  <tr>
	<tr></tr>
	<td colspan="2">Choisissez votre avatar :</td>
	</tr>

	<tr>
	<td><INPUT type="radio" name="img1" value=""/><img src="../Images/avatar1.png"/></td>
	<td><INPUT type="radio" name="img1" value=""/><img src="../Images/avatar2.png"/></td>
	<td><INPUT type="radio" name="img1" value=""/><img src="../Images/avatar3.png"/></td>
	<td><INPUT type="radio" name="img1" value=""/><img src="../Images/avatar4.png"/></td>
	</tr>
	<tr></tr><tr></tr>


  <tr>
    <td>
      Nombre de participants max
    </td>
    <td>
      <INPUT type="text" name="nb" value="<?php if(isset($_POST['nb'])){ echo htmlentities($_POST['nb']);}?>"/>
    </td>
  </tr>

  <tr>
    <td>
      Description du groupe
    </td>

    <td>
      <INPUT type="text" name="description" value="<?php if(isset($_POST['description'])){ echo htmlentities($_POST['description']);}?>"/>
    </td>
  </tr>

	</table>

	<br></br>
	<!--<div class="B">Valider</div>-->
	<div class="C"><INPUT type="submit" name='envoyer' value="Valider" /></div>
	</FORM>

<?php require '../Vues/footer.php'; ?>
