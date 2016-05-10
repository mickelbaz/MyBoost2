<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once 'Controleurs/controleurAccueil.php';
require_once 'Controleurs/controleurPageGroupe.php';
require_once 'Controleurs/controleurProfil.php';


function router(){

  switch($_GET['page']){

    case "groupe":
    $afficher_groupe=afficher_details_groupe($_GET['groupe']);
    break;

    case "profil":
    $afficher_profil=recup_all();
    break;

    default:
    $accueil=afficher_accueil();
    break;

  }


}
?>
