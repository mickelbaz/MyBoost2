<?php
require_once 'Modeles/modeleGroupes.php';

function afficher_accueil(){
  $groupe=dernier_groupe()->fetchAll();
  $invitation=recup_invitation()->fetchAll();
  $liste_groupe=recup_groupes()->fetchAll();
  require 'Vues/vueAccueil.php';
}


function supp_invitation($nom_groupe){
  $supp=supprimer_invitation($nom_groupe);
  return $supp;
}

function ignorer_invitation($nom_groupe){
  $supp=supprimer_invitation($nom_groupe);
  header('location: index.php?page=accueil');
}

function ignorer_notif($nom_groupe){
  $supp=supprimer_notif($nom_groupe);
  header('location: index.php?page=accueil');
}






?>
