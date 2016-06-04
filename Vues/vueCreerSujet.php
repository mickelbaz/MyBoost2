<?php require 'Vues/header.php'; ?>

<title>Le Forum de MyBoost - Créer un sujet de disccussion !</title>
<link rel="stylesheet" type="text/css" href="Contenu/headerFooter.css">



<body>

  <p id="sous_titre">* Tous les champs sont obligatoires</p>
  <br></br>
  	<FORM method="post" action="../index.php?page=forum">

  	<table>
  	<tr>
  	<td>Nom du Sujet:</td>
  	<td><INPUT type="text" name="sujet" value="<?php if(isset($_POST['sujet'])){ echo htmlentities($_POST['sujet']);}?>"></td>
  	</tr>
  	<tr>
  	<td>Pseudo :</td>
  	<td><INPUT type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])){ echo htmlentities($_POST['pseudo']);}?>"> </td>
  	</tr>
  	<tr>
    </table>

  <br></br>

<a href="index.php?page=creer_sujet"> <INPUT type="submit"  name="Valider" size="30" value="Valider"/></a>


  <br></br>

</body>

<?php require 'Vues/footer.php' ?>
