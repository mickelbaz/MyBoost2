<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once 'Modeles/modeleGroupes.php';

function afficher_details_groupe($nom_groupe){
  $donnees=afficher_groupe($nom_groupe)->fetch();
  require 'Vues/vueGroupe.php';
  return $donnees;
}



?>
