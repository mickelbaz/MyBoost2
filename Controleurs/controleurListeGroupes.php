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

function affiche_liste(){
  $liste=liste_groupe()->fetchAll();
  return $liste;
}

function recupmembre($groupe){
  $membre=recup_membre($groupe)->fetchAll();
  return $membre;
}

function recup_place($groupe){
  $place=recup_nb_place($groupe)->fetch();
  return $place;
}


function rejoindre($nom){
  rejoint($nom);
}


 ?>
