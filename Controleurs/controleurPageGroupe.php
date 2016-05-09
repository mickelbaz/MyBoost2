<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once '../Modeles/modeleGroupes.php';

function recup(){
  $req=afficher_groupe()->fetch();
  return $req;
}

$a=recup();


require '../Vues/vueGroupe.php';



?>
