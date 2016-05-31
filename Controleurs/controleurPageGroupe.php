<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once 'Modeles/modeleGroupes.php';

function afficher_details_groupe($nom_groupe,$pseudo){
  $donnees=afficher_groupe($nom_groupe)->fetch();
  $admin=recup_admin($nom_groupe)->fetch();
  $membre=recup_membre($nom_groupe)->fetchAll();
  $event=recup_infos_event($nom_groupe)->fetchAll();
  $mes_event=recup_mes_evenement($pseudo,$nom_groupe)->fetchAll();
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

function admin($nom){
  $admin_event=admin_event($nom)->fetch();
  return $admin_event;
}

function quitter_event($nom_groupe,$nom_event){
  $quitter=quitter_evenement($nom_event);
  header ('location: index.php?page=groupe&groupe='.$nom_groupe);
}

function annuler_event($nom_event,$nom_groupe){
  $annuler=annuler($nom_event);
  header ('location: index.php?page=groupe&groupe='.$nom_groupe);
}

function supp_membre($nom_groupe,$pseudo){
  $supp=supprimer_membre($nom_groupe,$pseudo);
  header ('location: index.php?page=groupe&groupe='.$nom_groupe);
}

function affiche_groupe_invite($nom_groupe){
  $donnees=afficher_groupe($nom_groupe)->fetch();
  $admin=recup_admin($nom_groupe)->fetch();
  $membre=recup_membre($nom_groupe)->fetchAll();
  $place=recup_nb_place($nom_groupe)->fetch();
  $event=recup_infos_event($nom_groupe)->fetchAll();
  require 'Vues/vueinvitegroupe.php';
}

function nouvel_admin($groupe,$membre){
  $admin=replace_admin($groupe,$membre);
  header ('location: index.php?page=groupe&groupe='.$groupe);
}

function suppression_event(){
  $evenements=tous_evenements()->fetchAll();
  $date_jour=date('Y-m-d');
  $heure_jour=date('H:i:s');
  foreach($evenements as list($nom,$date,$heure)){
    if($date_jour>$date){
      $supp=annuler($nom);
    }
    if($date_jour==$date){
      if($heure_jour>$heure){
        $supp=annuler($nom);
      }
    }
  }
}















?>
