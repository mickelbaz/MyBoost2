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

function supprimer_personne($pseudo){
  $supp=supprimer_personne_bdd($pseudo);
  header ('location: index.php?page=afficher_membres');
}

function bannir_membre($pseudo,$mail){
  $bannir=supprimer_personne_bdd($pseudo);
  $ajout_bdd=membre_banni($pseudo,$mail);
  header ('location: index.php?page=afficher_membres');
}

function supprimer_groupe_admin($groupe){
  $req=supprimer($groupe);
  header('location: index.php?page=afficher_groupes_admin');
}

function modif_groupe_admin($groupe){
  $donnees=afficher_groupe($groupe)->fetch();
  if (isset($_POST['envoyer']) && $_POST['envoyer']<>""){
    if ($_POST['nom']<>""  && $_POST['nb']<>""){
      replace_info($groupe);
      header('location: index.php?page=afficher_groupes_admin');
    }
    else {?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
    }
  }
  require 'Vues/vueModifgroupeadmin.php';
}

function afficher_club_admin(){
  $club=recup_salle();
  require 'Vues/vueAdminClub.php';
}

function supprimer_club($club){
  $supp=supp_club($club);
  header('location: index.php?page=afficher_clubs_admin');
}

function supp_comment($comment){
  $supp=supp_commentaire($comment);
  header('location: index.php?page=afficher_clubs_admin');
}



?>
