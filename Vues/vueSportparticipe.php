    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="Contenu/sportchoisi.css">
    <link rel="stylesheet" href="Contenu/sports.css" >
    <meta charset="utf-8"/>


<?php require 'Vues/header.php'; ?>

  <html>

  <head>
  <title>
	Participer à "<?php echo $_GET["sport"]; ?>"
  </title>


      <body>
    <br>

	<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=myboostp_myboost;charset=utf8', 'myboostp_root', 'appG6D');
}
catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM groupe WHERE sport_groupe="'.$_GET["sport"].'"');


?>

    <fieldset class="sport">
	<legend> Groupes contenant le sport "<?php echo $_GET["sport"]; ?>"</legend>
<?php
while ($donnees = $reponse->fetch()){
?>
<big><big>- <?php echo $donnees['nom']; ?> -</big></big><?php
echo ("<br>");
?>
<i>Description</i> :
<?php
echo $donnees['description'];
echo ("<br>");
?>
<i>Nombre de Places</i> :
<?php
echo $donnees['nb_max'];
echo ("<br>");
?>
<i>Places Restantes</i> :
<?php


$places = $bdd->query('SELECT COUNT(*) FROM rejoindre WHERE nom_groupe="'.$donnees["nom"].'"');
while ($donnees1 = $places->fetch()){
	echo $donnees[nb_max]-$donnees1[0];
}

echo ("<br><br>");
?>
<center>
<a class="sport_css" href="index.php?page=groupevoir&groupe=<?php echo $donnees["nom"]; ?>">Plus d'infos</a>
&nbsp;&nbsp;
<a class="sport_css" href="#" onclick="if (confirm('Voulez-vous rejoindre ce groupe ?')) window.location='index.php?page=grouperejoint&groupe=<?php echo $donnees["nom"]; ?>'; return false">Rejoindre</a>

</center>
<?php
echo ("<br>");
}

$reponse->closeCursor();

?>
    </fieldset>

      <br>

    </body>
  </html>

<?php require 'Vues/footer.php'; ?>
