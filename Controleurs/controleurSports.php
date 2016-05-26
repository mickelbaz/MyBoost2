<?php

function afficher_sports(){
    require 'Vues/vueSports.php';
  }

function ajout_sport(){
  $ajouter_sport=ajouter_sport()->fetchAll();
  require 'Vues/vueAjouterSport.php';
}

?>
