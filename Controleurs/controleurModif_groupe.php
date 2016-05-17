<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);?>
<?php


function affiche_modifgroupe($groupe){
  $donnees=afficher_groupe($groupe)->fetch();
  require 'Vues/vueModif_groupe.php';
}






?>
