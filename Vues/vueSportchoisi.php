    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="Contenu/sportchoisi.css">

    <meta charset="utf-8"/>





<?php require_once 'Vues/header.php'; 
      require_once 'Modeles/modeleSports.php';
    ?>

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


        <form action="index.php?page=ajouter_sport">
          <input class="sport" type=submit value=Participer>
        </form>

        <form action="">
          <input class="sport" type=submit value='Chercher une salle / un terrain'>
        </form>

<center>
<a class="sport_css" href="index.php?page=sport_participe&sport=<?php echo $_GET['sport'];?>">Participer</a>
<br><br>


      <?php
    }?>

    </body>
  </html>


<?php require 'Vues/footer.php'; ?>
