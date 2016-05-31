<?php require 'Vues/header.php'

?>
<?php
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
?>

<title>Le Forum de MyBoost</title>
<link rel="stylesheet" type="text/css" href="../Contenu/forum.css">



<body>

<INPUT type="button" name="creer_sujet" size="30" value="Créer un sujet de discussion !"/>
  <br></br>

</body>
<?php require 'Vues/footer.php' ?>
