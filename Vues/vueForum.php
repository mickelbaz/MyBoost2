<?php require_once 'Vues/header.php'; ?>

<?php
if (isset($_POST['Valider']) && $_POST['Valider']=="Valider" && $_POST['sujet']<>"" && $_POST['pseudo']<>""){
 $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
 $bdd->exec('INSERT INTO sujet(sujet, pseudo) VALUES ("'.$_POST['pseudo'].'","'.$_POST['sujet'].'")'); }

?>

<title>Le Forum de MyBoost</title>
<link rel="stylesheet" type="text/css" href="../Contenu/forum.css">



<body><br>
  <?php

  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req = $bdd->query("SELECT * FROM sujet");
  while($donnees=$req->fetch()){

    ?><a href="index.php?page=sujet&id=<?php echo $donnees['ID_sujet'];?>&sujet=<?php echo $donnees['sujet'];?>"><?php echo $donnees['ID_sujet'];echo("&nbsp;");echo $donnees['sujet'];?></a>

    <br><br>

    <?php } ?>
<a href="index.php?page=afficher_creer_sujet"> <INPUT type="button" size="30" value="Créer un sujet de discussion !"/></a>
  <br></br>

</body>
<?php require_once 'Vues/footer.php' ?>
