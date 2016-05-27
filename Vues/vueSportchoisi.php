    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="Contenu/sportchoisi.css">
    <link rel="stylesheet" href="Contenu/sports.css" >
    <meta charset="utf-8"/>


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

        <form action="">
          <input class="sport" type=submit value=Participer>
        </form>

        <form action="">
          <input class="sport" type=submit value='Chercher une salle / un terrain'>
        </form>

        <form action="">
          <input class="sport" type=submit value='Chercher un partenaire / un groupe'>
        </form>
      <?php
    }?>

    </body>
  </html>

<?php require 'Vues/footer.php'; ?>
