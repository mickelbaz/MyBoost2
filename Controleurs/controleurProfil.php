<?php session_start();

error_reporting(E_ALL & ~E_NOTICE); ?>
<?php

require 'Modeles/modeleUtilisateurs.php';
//require 'Modeles/modeleGroupes.php';

function recup(){
  $req=recup_infos()->fetch();
  return $req;
}


function recupgroupeadmin(){
  $req=recup_groupe_admin()->fetchAll();
  return $req;
}

function recupautregroupe(){
  $req=recup_autre_groupe()->fetchAll();
  return $req;
}

function recupsport(){
  $req=recup_sport()->fetchAll();
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


function recup_all(){
  $a=recup();
  $b=recupgroupeadmin();
  $d=recupautregroupe();
  $c=recupsport();
  require 'Vues/vueProfil.php';
}
 ?>
