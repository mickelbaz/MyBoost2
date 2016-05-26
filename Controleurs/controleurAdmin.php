<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once 'Modeles/modeleUtilisateurs.php';
require_once 'Modeles/modeleAdmin.php';
require_once 'Modeles/modeleGroupes.php';
require_once 'Modeles/modeleSports.php';

function afficher_admin(){
  require 'Vues/vueAdmin.php';
}

function afficher_les_membres(){
$membres=membres_admin()->fetchAll();
require 'Vues/vueAdminMembres.php';

}

function afficher_groupes_admin(){
  $groupes=groupes_admin()->fetchAll();
  require 'Vues/vueAdminGroupes.php';

}



?>
