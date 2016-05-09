<?php //require '../Vues/vueSportchoisi.php';

try{

$bdd=new PDO('mysql:host=localhost; dbname=myboostbdd; charset=utf8', 'root', 'root');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$description=mysql_query('SELECT description FROM sport WHERE nom="'.$_GET['sport'].'"');

?>


  <html>
    <head>
      <body>
        <title>Sports</title>

          <link rel="stylesheet" href="../Contenu/sports.css" >
          <link rel="stylesheet" href="../Contenu/sportchoisi.css">
    </head>
<?php ?>
<br>

    <fieldset class="sport">
      <legend>  <?php echo($_GET['sport']);?>

      </legend>
      <table width=100% border=0>
        <td width="250px">
          <img id="sport" src="../Images/clipart_<?php echo($_GET['sport']);?>.png">
        </td>
        <td>
          <?php
          while($donnees = mysql_fetch_array($description))
          {
            echo $donnees['description'];
          }
          ?>
      </td>
    </table>

    </fieldset>

      <br>

        <form action="">
          <input class="sport" type=submit value=Participer>
        </form>
<br>
    </body>
  </html>
