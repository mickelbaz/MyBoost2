<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once 'Modeles/modeleGroupes.php';

function afficher_details_groupe($nom_groupe){
  $donnees=afficher_groupe($nom_groupe)->fetch();
  $admin=recup_admin($nom_groupe)->fetch();
  $membre=recup_membre($nom_groupe)->fetchAll();
  require 'Vues/vueGroupe.php';
}

function admin_groupe($nom_groupe){
  $admin=recup_admin($nom_groupe)->fetch();
  return $admin;
}


?>
