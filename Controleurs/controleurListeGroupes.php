<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);


require_once '../Modeles/modeleGroupes.php';

function affiche_liste(){
  $liste=liste_groupe()->fetchAll();
  return $liste;
}
$liste=affiche_liste();


function recupgroupe(){
  $req=recup_groupe()->fetchAll();
  return $req;
}
$b=recupgroupe();



function rejoindre(){
  $liste=affiche_liste();
  for($i=0; $i<count($liste);$i++){
    if(isset($_POST[$i])){
      rejoint($liste[$i][0]);
      $nom_groupe=$liste[$i][0];
      header('location: ../Controleurs/controleurPageGroupe.php');
    }
  }
}

require '../Vues/vueListeGroupe.php';

$r=rejoindre();



 ?>
