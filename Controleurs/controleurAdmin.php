<?php

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
