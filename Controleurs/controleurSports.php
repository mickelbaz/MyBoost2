<?php

function afficher_sports(){
    require 'Vues/vueSports.php';
  }

function ajout_sport(){
  $var_ajouter_sport=ajouter_sport()->fetchAll();
  require_once 'Vues/vueAjouterSport.php';
}

?>
