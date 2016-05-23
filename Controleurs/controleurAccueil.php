<?php
require 'Modeles/modeleGroupes.php';

function afficher_accueil(){
  $groupe=dernier_groupe()->fetchAll();
  $invitation=recup_invitation()->fetchAll();
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



function en_attente($nom_groupe){
  $personne=recup_personne_attente($nom_groupe);
  return $personne;
}


?>
