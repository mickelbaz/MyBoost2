<?php
require_once 'Vues/header.php';


$bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
$req = $bdd->exec('INSERT INTO message(message,pseudo,ID_sujet) VALUES ("'.$_POST['discussion'].'","'.$_POST['pseudo'].'","'.$_POST['id'].'")');


echo($_GET["sujet"]);
echo("<br>");
echo("<br>");

$bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
$req = $bdd->query('SELECT * FROM message WHERE ID_sujet="'.$_GET["id"].'"');
while($donnees=$req->fetch()){
    echo("-&nbsp;");
    ?><i><?php echo($donnees["pseudo"]); ?></i><?php
    echo("&nbsp;:&nbsp;");
    echo($donnees["message"]);
    echo("<br>");
}
?>


<title>Le Forum de MyBoost</title>
<link rel="stylesheet" type="text/css" href="../Contenu/forum.css">



<body>
<?php echo($_SESSION["pseudo"]); ?>
<form action="" method="post">

<INPUT type="text" name="pseudo" size="15" placeholder="Entrez votre pseudo..."/>


<INPUT type="text" name="discussion" size="50" placeholder="Commencez la discussion ici..."/>

<input type="hidden" name="id" value="<?php echo($_GET["id"]); ?>">

<input type="submit" name="Envoyer">

</form>

  <br></br>
<div>
<a href="index.php?page=afficher_creer_sujet"> <INPUT type="button" size="30" value="Créer un sujet de discussion !"/></a>

  <br></br>
</div>


</body>
<?php require_once 'Vues/footer.php' ?>
