<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);?>
<?php

function affiche_modifgroupe(){
  $a=recup_donnees();
  require 'Vues/vueModif_groupe.php';
}






?>
