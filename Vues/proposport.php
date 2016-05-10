

<?php
 require '../Vues/header.php';

    mysql_connect("localhost" ,"root","root");
    mysql_select_db("myboostbdd");


    echo('sport : ');
    echo $_POST['nomSport'];

?><br><?php

    echo('description : ');
    echo $_POST['descriptionSport'];

      $sql='INSERT INTO sport(nom, description) VALUES ("'.$_POST['nomSport'].'","'.$_POST['descriptionSport'].'")';

mysql_query($sql) or die('erreur sql'.$sql.'<br>'.mysql_error());?>

    <html><h2>Merci d'avoir proposé un sport !</h2></html>

   <?php require "../Vues/footer.php"; ?>
