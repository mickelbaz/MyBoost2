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
      if($_POST['region']!="title" && $_POST['sport']=="title"){
        $groupe=recherche_groupe_region($_POST['region'])->fetchAll();
      }
      if($_POST['region']=="title" && $_POST['sport']!="title"){
        $groupe=recherche_groupe_sport($_POST['sport'])->fetchAll();
      }
      if($_POST['region'] !="title" && $_POST['sport'] !="title"){
        $groupe=recherche_groupe_sport_region($_POST['sport'],$_POST['region'])->fetchAll();
      }
      if($_POST['region'] =="title" && $_POST['sport'] =="title"){
        $groupe=recherche_all_groupe()->fetchAll();
      }
      header('location: index.php?page=recherche_groupe');
    }
    if($_POST['choix']=="membre"){
      if($_POST['region']!="title" && $_POST['sport']=="title"){
        $membre=recherche_membre_region($_POST['region'])->fetchAll();
      }
      if($_POST['region']=="title" && $_POST['sport']!="title"){
        $membre=recherche_membre_sport($_POST['sport']);
      }
      if($_POST['region'] !="title" && $_POST['sport'] !="title"){
        $membre=recherche_membre_sport_region($_POST['sport'],$_POST['region'])->fetchAll();
      }
      if($_POST['region'] =="title" && $_POST['sport'] =="title"){
        $membre=recherche_all_membre()->fetchAll();
      }
    }
    if($_POST['choix']=="club"){
      if($_POST['region']!="title" && $_POST['sport']=="title"){
        $club=recherche_club_region($region)->fetchAll();
      }
        if($_POST['region']=="title" && $_POST['sport']!="title"){
          $club=recherche_all_club()->fetchAll();
        }
        if($_POST['region'] !="title" && $_POST['sport'] !="title"){
            $club=recherche_club_region($region)->fetchAll();
        }
          if($_POST['region'] =="title" && $_POST['sport'] =="title"){
              $club=recherche_all_club()->fetchAll();
          }
    }
  }
  require 'Vues/vueRechercheAvancee.php';
}

 ?>
