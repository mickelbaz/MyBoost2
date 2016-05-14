<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);?>
<?php


function affiche_modifgroupe($groupe){
  $a=afficher_groupe($groupe);
  require 'Vues/vueModif_groupe.php';
}






?>
