<?php require 'Vues/header.php'; ?>

<title>Créer un sujet de discussion</title>
<link rel="stylesheet" type="text/css" href="Contenu/headerFooter.css">



<body>


  <br></br>
  	<FORM name="sujet" method="post" action="">
  	<table>
  	<tr>
  	<td>Nom du Sujet :</td>
  	<td><INPUT type="text" name="sujet" size="40" value="<?php if(isset($_POST['sujet'])){ echo htmlentities($_POST['sujet']);}?>"></td>
  	</tr>
  	<tr>
  	</tr>
  	<tr>
    </table>

  <br></br>

  <INPUT type="submit"  name="Valider" size="30" value="Valider"/></a>
</form>

  <br></br>

</body>

<?php require 'Vues/footer.php' ?>
