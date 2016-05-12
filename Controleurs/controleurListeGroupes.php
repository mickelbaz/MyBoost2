<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once 'Modeles/modeleGroupes.php';

function afficher_groupes(){
  $liste=liste_groupe()->fetchAll();
  require 'Vues/vueListeGroupe.php';
  return $liste;
}

function affiche_liste(){
  $liste=liste_groupe()->fetchAll();
  return $liste;
}


function rejoindre($nom){
  rejoint($nom);
}







 ?>
