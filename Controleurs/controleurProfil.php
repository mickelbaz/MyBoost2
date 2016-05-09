<?php session_start();

error_reporting(E_ALL & ~E_NOTICE); ?>
<?php

require '../Modeles/modeleUtilisateurs.php';
require '../Modeles/modeleGroupes.php';

function recup(){
  $req=recup_infos()->fetch();
  return $req;
}
$a=recup();

function recupgroupe(){
  $req=recup_groupe()->fetchAll();
  return $req;
}
$b=recupgroupe();

function recupsport(){
  $req=recup_sport($b[0][0])->fetchAll();
  return $req;
}

$c=recupsport();


require '../Vues/vueProfil.php';
 ?>
