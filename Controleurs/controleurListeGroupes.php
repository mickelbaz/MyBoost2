<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);


require_once '../Modeles/modeleGroupes.php';

function affiche_liste(){
  $liste=liste_groupe()->fetchAll();
  return $liste;
}

$liste=affiche_liste();


require '../Vues/vueListeGroupe.php';
 ?>
