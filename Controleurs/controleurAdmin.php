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

function supprimer_personne($pseudo){
  $supp=supprimer_personne_bdd($pseudo);
  header ('location: index.php?page=afficher_membres');
}

function bannir_membre($pseudo,$mail){
  $bannir=supprimer_personne_bdd($pseudo);
  $ajout_bdd=membre_banni($pseudo,$mail);
  header ('location: index.php?page=afficher_membres');
}
?>
