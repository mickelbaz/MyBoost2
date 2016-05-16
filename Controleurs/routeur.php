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
require_once 'Controleurs/controleurPropositionSport.php';
require_once 'Controleurs/controleurModif_groupe.php';
require_once 'Controleurs/controleurCreationEvenement.php';
require_once 'Controleurs/controleurAnnuaire.php';
require_once 'Controleurs/controleurSalle.php';
require_once 'Controleurs/controleurFAQ.php';


function router(){

  switch($_GET['page']){

    case "accueil":
    $accueil=afficher_accueil();
    break;

    case "connexion":
    $connexion=connect();
    break;

    case "groupe":
    $afficher_groupe=afficher_details_groupe($_GET['groupe'],$_SESSION['pseudo']);
    break;

    case "groupevoir" :
    $afficher=affiche_groupe_invite($_GET['groupe']);
    break;

    case "grouperejoint":
    $rejoint=rejoindre($_GET['groupe']);
    $afficher_groupe=afficher_details_groupe($_GET['groupe'],$_SESSION['pseudo']);
    break;

    case "profil":
    $afficher_profil=recup_all($_SESSION['pseudo']);
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

    case "quitter":
    $quitter=quitter_groupe($_GET['quitter']);
    break;

    case "supprimer" :
    $supprimer=supprimer_groupe($_GET['supprimer']);
    break;


    case "proposition_sport" :
    $proposition=afficherproposport();
    break;

    case "modif_groupe":
    $modif_groupe=affiche_modifgroupe($_GET['groupe']);
    break;

    case "evenement" :
    $evenement=creer($_GET['nom']);
    break;

    case "participer" :
    $participe=participer($_GET['event'],$_GET['nom']);
    break;

    case "nonparticiper" :
    $nonparticipe=quitter_event($_GET['nom'],$_GET['event']);
    break;

    case "profilvoir" :
    $afficherprofil=affiche_membre($_GET['pseudo']);
    break;

    case "annuler" :
    $annuler=annuler_event($_GET['event'],$_GET['nom']);
    break;

    case "bannir" :
    $bannir=supp_membre($_GET['groupe'],$_GET['membre']);
    break;

    case "annuaire" :
    $annuaire=affiche_annuaire();
    break;

    case "salle" :
    $salle=affiche_salle();
    break;

    case "ajouter_club" :
    $ajouter_club=ajouter_club();
    break;

    case "club" :
    $club=page_salle($_GET['club']);
    break;



    default:
    $_SESSION=array();
    session_destroy();
    $accueil=afficher_accueil();
    break;

  }


}
?>
