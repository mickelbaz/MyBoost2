<?php
//require 'Modeles/modeleSports.php';


 function afficher_description($sport){
   $description=description($sport)->fetch();
   require_once 'Vues/vueSportchoisi.php';

 }



?>
