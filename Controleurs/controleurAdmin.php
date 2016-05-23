<?php
require_once 'Modeles/modeleUtilisateurs.php';
require_once 'Modeles/modeleAdmin.php';

function afficher_admin(){
  require 'Vues/vueAdmin.php';
}

function afficher_membres(){
$membres=afficher_liste_membres();
require 'Vues/vueAdminMembres.php';
}
?>
