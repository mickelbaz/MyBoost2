    <meta http-equiv="content-type" content="text/html;charset=utf8_swedish_ci">
<?php

  mysql_connect("localhost" ,"root","root");
  mysql_select_db("myboostbdd");

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
