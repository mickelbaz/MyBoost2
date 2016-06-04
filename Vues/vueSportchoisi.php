    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="Contenu/sportchoisi.css">

    <meta charset="utf-8"/>

<<<<<<< HEAD




<?php require_once 'Vues/header.php'; 
      require_once 'Modeles/modeleSports.php';
    ?>
=======
<?php
require_once 'Modeles/modeleSports.php';

require 'Vues/header.php'; ?>
>>>>>>> cd0e825d9312f4a6e6b9a14c8cb96e468e1c9403

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

          <img id="sport" src="Images/<?php echo($_GET['sport']);?>.png">

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

<center>
<a class="sport_css" href="index.php?page=sport_participe&sport=<?php echo $_GET['sport'];?>">Participer</a>
<br><br>

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
>>>>>>> cd0e825d9312f4a6e6b9a14c8cb96e468e1c9403

      <?php
    }?>

    </body>
  </html>


<?php require 'Vues/footer.php'; ?>
