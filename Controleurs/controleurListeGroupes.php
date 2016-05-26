<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once 'Modeles/modeleGroupes.php';
require_once 'Modeles/modeleAdmin.php';

function afficher_groupes(){
  $liste=liste_groupe()->fetchAll();
  require 'Vues/vueListeGroupe.php';
  return $liste;
}


function rejoindre($nom){
  rejoint($nom);
}

function notif($nom_groupe){
  attente($nom_groupe);
  header('location: index.php?page=ListeGroupes');
}







 ?>
