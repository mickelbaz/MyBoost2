<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once 'Modeles/modeleUtilisateurs.php';
require_once 'Modeles/modeleAdmin.php';

function afficher_admin(){
  require 'Vues/vueAdmin.php';
}

function afficher_membres(){
$membres=membres_admin();
require 'Vues/vueAdminMembres.php';
return $membres;

}

function afficher_groupes_admin(){
  $liste=groupes_admin()->fetchAll();
  require 'Vues/vueAdminGroupes.php';
  return $liste;

}
?>
