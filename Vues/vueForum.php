<?php require 'Vues/header.php'

?>
<?php
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
?>

<title>Le Forum de MyBoost</title>
<link rel="stylesheet" type="text/css" href="../Contenu/forum.css">



<body>
  <?php
foreach ($reponse as list($reponse)){
    ?>

  <table>
	<tr>
	<td>Sujet :</td>
	<td><a href="index.php?page=sujet"><INPUT type="button" name="sujet" value=<?php echo $reponse; ?>/></td></a>
	</tr>
  </table>



<?php }?>
<a href="index.php?page=creer_sujet"> <INPUT type="button" name="creer_sujet" size="30" value="Créer un sujet de discussion !"/></a>
  <br></br>

</body>
<?php require 'Vues/footer.php' ?>
