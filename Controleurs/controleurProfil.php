<?php session_start();

error_reporting(E_ALL & ~E_NOTICE); ?>
<?php

require_once 'Modeles/modeleUtilisateurs.php';

function recup($pseudo){
  $req=recup_infos($pseudo)->fetch();
  return $req;
}


function recupgroupeadmin($pseudo){
  $req=recup_groupe_admin($pseudo)->fetchAll();
  return $req;
}

function recupautregroupe($pseudo){
  $req=recup_autre_groupe($pseudo)->fetchAll();
  return $req;
}

function recupsport($pseudo){
  $req=recup_sport($pseudo)->fetchAll();
  return $req;
}

function quitter_groupe($groupe){
  $req=quitter($groupe);
  header('location: index.php?page=profil');
}

function supprimer_groupe($groupe){
  $req=supprimer($groupe);
  header('location: index.php?page=profil');
}

function recup_event($pseudo){
  $req=recup_evenement($pseudo)->fetchAll();
  return $req;
}


function recup_all($pseudo){
  $a=recup($pseudo);
  $b=recupgroupeadmin($pseudo);
  $d=recupautregroupe($pseudo);
  $c=recupsport($pseudo);
  $event=recup_event($pseudo);
  require 'Vues/vueProfil.php';
}


function affiche_membre($pseudo){
  $a=recup($pseudo);
  $b=recupgroupeadmin($pseudo);
  $d=recupautregroupe($pseudo);
  $c=recupsport($pseudo);
  $event=recup_event($pseudo);
  require 'Vues/vueinviteprofil.php';
}
 ?>
