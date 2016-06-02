<?php require 'Vues/header.php'

?>
<?php
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
?>

<title>Le Forum de MyBoost - Créer un sujet de disccussion !</title>
<link rel="stylesheet" type="text/css" href="../Contenu/forum.css">



<body>

  <p id="sous_titre">* Tous les champs sont obligatoires</p>
  <br></br>
  	<FORM method="post" action="Controleurs/controleurForum.php" enctype="multipart/form-data">

  	<table>
  	<tr>
  	<td>Nom du Sujet:</td>
  	<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']);}?>"/></td>
  	</tr>
  	<tr>
  	<td>Pseudo :</td>
  	<td><INPUT type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])){ echo htmlentities($_POST['pseudo']);}?>"/> </td>
  	</tr>
  	<tr>
  	<td>Commentaire :</td>
  	<td><INPUT type="text" name="message" value="<?php if(isset($_POST['message'])){ echo htmlentities($_POST['message']);}?>"/></td>
  	</tr>
    </table>

<INPUT type="submit" name="Valider" size="30"/>
  <br></br>

</body>
<?php require 'Vues/footer.php' ?>
