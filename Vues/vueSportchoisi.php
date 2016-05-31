    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="Contenu/sportchoisi.css">
    <link rel="stylesheet" href="Contenu/sports.css" >
    <meta charset="utf-8"/>
<?php


  mysql_connect("localhost" ,"root","root");
  mysql_select_db("myboost");
<<<<<<< HEAD
=======
  mysql_query("SET NAMES UTF8");
>>>>>>> 42872bfcd3244175bf041f1754905303e653cccd

$description=mysql_query('SELECT description FROM sport WHERE nom="'.$_GET['sport'].'"');
$nb_participants=mysql_query('SELECT nb_participants FROM sport WHERE nb_participants="'.$_GET['nb_participants'].'"')
?>
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
          <img id="sport" src="Images/clipart_<?php echo($_GET['sport']);?>.png">
        </td>
        <td>
          <?php
          while($donnees = mysql_fetch_array($description))

          {
            echo $donnees['description'];

          }
          while($nbsport = mysql_fetch_array($nb_participants)){

            echo $nbsport['nb_participants'];
          }

          ?>

          <br>
      </td>
    </table>

    </fieldset>

      <br>

        <form action="">
          <input class="sport" type=submit value=Participer>
        </form>

        <form action="">
          <input class="sport" type=submit value='Chercher une salle / un terrain'>
        </form>

        <form action="">
          <input class="sport" type=submit value='Chercher un partenaire / un groupe'>
        </form>

    </body>
  </html>

<?php require 'Vues/footer.php'; ?>
