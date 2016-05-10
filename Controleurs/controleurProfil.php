<?php session_start();

error_reporting(E_ALL & ~E_NOTICE); ?>
<?php

require 'Modeles/modeleUtilisateurs.php';
//require 'Modeles/modeleGroupes.php';

function recup(){
  $req=recup_infos()->fetch();
  return $req;
}


function recupgroupe(){
  $req=recup_groupe()->fetchAll();
  return $req;
}


function recupsport(){
  $req=recup_sport()->fetchAll();
  return $req;
}


function recup_all(){
  $a=recup();
  $b=recupgroupe();
  $c=recupsport();
  require 'Vues/vueProfil.php';
}
 ?>
