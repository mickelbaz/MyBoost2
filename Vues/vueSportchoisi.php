
  <html>
    <head>
      <body>
        <title>Sports</title>


          <link rel="stylesheet" href="../Contenu/sportchoisi.css">
    </head>
<?php ?>
    <fieldset class="sport">
      <legend>  <?php echo($_GET['sport']);?>

      </legend>
        <?php echo($_GET{'description'});?>
    </fieldset>
      <br>

        <form action="">
          <input class="sport" type=submit value=Participer>
        </form>

    </body>
  </html>

  <?php require '../Vues/footer.php'; ?>
