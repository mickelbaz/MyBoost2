<?php
require 'Modeles/modeleRecherche.php';
require 'Modeles/modeleSports.php';



function redirection(){
  if(isset($_POST['valider']) && $_POST['valider']<>""){
    header ('location: index.php?page=resultatRecherche&recherche='.$_POST['name']);
    exit;
  }
}

function affiche_page_resultat(){
  $groupe=recherche_groupe()->fetchAll();
  $membre=recherche_membre()->fetchAll();
  $club=recherche_club()->fetchAll();
  $sport=recherche_sport()->fetchAll();
  require 'Vues/vueResultatRecherche.php';
}



function recherche_avancee(){
  $sport=recup_all_sport()->fetchAll();
  if(isset($_POST['rechercher'])&& $_POST['rechercher']<>""){
    if($_POST['choix']=="groupe"){
      header('location: index.php?page=recherche_groupe&region='.$_POST['region'].'&sport='.$_POST['sport']);
    }
    if($_POST['choix']=="membre"){
        header('location: index.php?page=recherche_membre&region='.$_POST['region'].'&sport='.$_POST['sport']);
    }
    if($_POST['choix']=="club"){
      header('location: index.php?page=recherche_club&region='.$_POST['region'].'&sport='.$_POST['sport']);
    }
  }
  require 'Vues/vueRechercheAvancee.php';
}

function resultatgroupe($region,$sport){
  $groupe=recherche_avancee_groupe($region,$sport)->fetchAll();
  require 'Vues/vueRechercheGroupe.php';
}

function resultatclub($region,$sport){
  $club=recherche_avancee_club($region,$sport)->fetchAll();
  require 'Vues/vueRechercheClub.php';
}

function resultatmembre($region,$sport){
  $membre=recherche_avancee_membre($region,$sport)->fetchAll();
  require 'Vues/vueRechercheMembre.php';
}


 ?>
