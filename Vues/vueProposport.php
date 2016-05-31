

<?php
 require '../Vues/header.php';

    mysql_connect("localhost" ,"root","root");
    mysql_select_db("myboost");


    echo('sport : ');
    echo $_POST['nomSport'];

?><br><?php

    echo('description : ');
    echo $_POST['descriptionSport'];

    ?> <br> <?php

    echo('type de sport : ');
    echo $_POST['TypeDeSport'];

$sql='INSERT INTO sport(nom, Type_de_sport, description) VALUES ("'.$_POST['nomSport'].'","'.$_POST['descriptionSport'].'","'.$_POST['TypeDeSport']'")';

mysql_query($sql) or die('erreur sql'.$sql.'<br>'.mysql_error()); ?>

    <html> <h2>Merci d'avoir proposé un sport ! </h2> </html>

   <?php require "../Vues/footer.php"; ?>
