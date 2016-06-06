<?php

function afficher_sports(){
  $sport_aquatique=sport_par_type('aquatique')->fetchAll();
  $sport_ballon=sport_par_type('ballon')->fetchAll();
  $sport_raquette=sport_par_type('raquette')->fetchAll();
  $sport_nature=sport_par_type('nature')->fetchAll();
  $sport_combat=sport_par_type('combat')->fetchAll();
    require 'Vues/vueSports.php';
  }


?>
