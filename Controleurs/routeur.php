<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once 'Controleurs/controleurAccueil.php';
require_once 'Controleurs/controleurPageGroupe.php';
require_once 'Controleurs/controleurProfil.php';
require_once 'Controleurs/controleurSports.php';
require_once 'Controleurs/controleurSportchoisi.php';
require_once 'Controleurs/controleurListeGroupes.php';
require_once 'Controleurs/controleurCreationGroupes.php';
require_once 'Controleurs/controleurConnexion.php';
require_once 'Controleurs/controleurInscription.php';
require_once 'Controleurs/controleurApropos.php';
require_once 'Controleurs/controleurModif_profil.php';


function router(){

  switch($_GET['page']){

    case "accueil":
    $accueil=afficher_accueil();
    break;

    case "connexion":
    $connexion=connect();
    break;

    case "groupe":
    $afficher_groupe=afficher_details_groupe($_GET['groupe']);
    break;

    case "grouperejoint":
    $rejoint=rejoindre($_GET['groupe']);
    $afficher_groupe=afficher_details_groupe($_GET['groupe']);
    break;

    case "profil":
    $afficher_profil=recup_all();
    break;

    case "sports":
    $afficher_sports=afficher_sports();
    break;

    case "sport":
    $afficher_description_sport=afficher_description();
    break;

    case "ListeGroupes":
    $afficher_groupes=afficher_groupes();
    break;

    case "creationGroupe":
    $creation=addgroupe();
    break;

    case "inscription":
    $inscription=verif();
    break;

    case "apropos":
    $apropos=affiche_apropos();
    break;

    case "modif":
    $afficher_page=affiche_page();
    break;

    case "modif_coordonnees":
    $modif_coordonnees=verif_coordonnees();
    break;

    case "modif_mail":
    $modif_mail=modif_mail();
    break;

    case "modif_mdp":
    $modif_mdp=modif_mdp();
    break;


    default:
    $_SESSION=array();
    session_destroy();
    $accueil=afficher_accueil();
    break;

  }


}
?>
