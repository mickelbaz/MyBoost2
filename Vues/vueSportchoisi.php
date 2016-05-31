    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="Contenu/sportchoisi.css">

    <meta charset="utf-8"/>

require_once 'Modeles/modeleSports.php';


<<<<<<< HEAD
  mysql_connect("localhost" ,"root","root");
  mysql_select_db("myboost");
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  mysql_query("SET NAMES UTF8");


$description=mysql_query('SELECT description FROM sport WHERE nom="'.$_GET['sport'].'"');
$nb_participants=mysql_query('SELECT nb_participants FROM sport WHERE nb_participants="'.$_GET['nb_participants'].'"')
?>
=======
>>>>>>> 6685fc3d81992234ce71a144555540d2717c7feb
<?php require 'Vues/header.php'; ?>

  <html>

    <head>
      <body>
        <title><?php echo($_GET['sport']) ?></title>


    </head>
<?php ?>
<br>

    <fieldset class="sport">
      <legend>  <?php echo($_GET['sport']);?>

      </legend>
      <table width=100% border=0>
        <td width="250px">
<<<<<<< HEAD
          <img class="imgsport" src="Images/clipart_<?php echo($_GET['sport']);?>.png">
=======
          <img id="sport" src="Images/<?php echo($_GET['sport']);?>.png">
>>>>>>> 6685fc3d81992234ce71a144555540d2717c7feb
        </td>
        <td>
          <?php echo $description[0] ?>
          <br>
      </td>
    </table>

    </fieldset>

      <br>
<?php if(isset($_SESSION['pseudo'])){?>

<<<<<<< HEAD
        <form action="index.php?page=ajouter_sport">
          <input class="sport" type=submit value=Participer>
        </form>

        <form action="">
          <input class="sport" type=submit value='Chercher une salle / un terrain'>
        </form>
=======
<center>
<a class="sport_css" href="index.php?page=sport_participe&sport=<?php echo $_GET['sport'];?>">Participer</a>
<br><br>
<!--
<a class="sport_css" href="">Chercher une salle / un terrain</a>
<br><br>
<a class="sport_css" href="">Chercher un partenaire / un groupe</a>
</center>
<br>
-->
>>>>>>> cf992fc47b46273ec22bc1e94f60e36139c4f75e

      <?php
    }?>
	
    </body>
  </html>

 
<?php require 'Vues/footer.php'; ?>
