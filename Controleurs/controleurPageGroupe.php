<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once 'Modeles/modeleGroupes.php';

function afficher_details_groupe($nom_groupe){
  $donnees=afficher_groupe($nom_groupe)->fetch();
  $admin=recup_admin($nom_groupe)->fetch();
  $membre=recup_membre($nom_groupe)->fetchAll();
  $event=recup_infos_event($nom_groupe)->fetchAll();
  require 'Vues/vueGroupe.php';
}

function participer($nom_event,$nom_groupe){
  participe($nom_event);
  header('location: index.php?page=groupe&groupe='.$nom_groupe);
}

function nb($nom){
  $nb_participants=nb_participants($nom)->fetchAll();
  return $nb_participants;
}

function nombre_place($nom){
  $place=nb_place($nom)->fetch();
  return $place;
}









?>
