<?php
session_start();
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
require_once 'Controleurs/controleurRecherche.php';
require_once 'Controleurs/controleurAdmin.php';
require_once 'Controleurs/controleurForum.php';
require_once 'Controleurs/controleurSportParticipe.php';



function router(){
  session_start();
  switch($_GET['page']){

    case "accueil":
    $accueil=afficher_accueil();
    break;

    case "connection":
    $connexion=connect();
    break;

    case"page_accueil_connexion":
    $accueil_connexion=connect();
    break;

    case "groupe":
    $supprimer=suppression_event();
    $afficher_groupe=afficher_details_groupe($_GET['groupe'],$_SESSION['pseudo']);
    break;

    case "groupevoir" :
    $supprimer=suppression_event();
    $afficher=affiche_groupe_invite($_GET['groupe']);
    break;

    case "grouperejoint":
    $supprimer=suppression_event();
    $supp=supp_invitation($_GET['groupe']);
    $rejoint=rejoindre($_GET['groupe']);
    $supp_attente=supprimer_notif($_GET['groupe']);
    $afficher_groupe=afficher_details_groupe($_GET['groupe'],$_SESSION['pseudo']);
    break;

    case "profil":
    $supprimer=suppression_event();
    $afficher_profil=recup_all($_SESSION['pseudo']);
    break;

    case "sports":
    $afficher_sports=afficher_sports();
    break;

    case "sport":
    $afficher_description_sport=afficher_description($_GET['sport']);
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

    case "ajouter_un_sport" :
    $ajout=ajout_sport();
    break;

    case "modif_groupe":
    $affiche_modif=affiche_modifgroupe($_GET['groupe']);
    $modif_groupe=modif_groupe($_GET['groupe']);
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
    $annuaire=affiche_page_annuaire();
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

    case "admin" :
    $admin=afficher_admin();
    break;

    case "faq" :
    $afficher_page=affiche_faq();
    break;

   case "afficher_membres" :
   $afficher_liste_membres=afficher_membres();
   break;

   case "gérer_groupe" :
   $afficher_liste_groupes=afficher_groupes();

    case "resultatRecherche" :
    $page=affiche_page_resultat();
    break;

    case "rechercheavancee" :
    $affiche_vue=recherche_avancee();
    break;

    case "recherche_groupe":
    $resultat=resultatgroupe($_GET['region'],$_GET['sport']);
    break;

    case "recherche_club":
    $resultat=resultatclub($_GET['region'],$_GET['sport']);
    break;

    case "recherche_membre" :
    $resultat=resultatmembre($_GET['region'],$_GET['sport']);
    break;

    case "ignorer_invit" :
    $ignorer=ignorer_invitation($_GET['groupe']);
    break;

    case "recevoir_notif" :
    $notif=notif($_GET['groupe']);
    break;

   case "afficher_membres_admin" :
   $afficher=afficher_les_membres();
   break;

   case "afficher_groupes_admin" :
   $afficher=afficher_groupes_admin();
   break;


   case "supprimer_personne" :
   $supp=supprimer_personne($_GET['pseudo']);
   break;

   case "bannir_personne" :
   $bannir=bannir_membre($_GET['pseudo'],$_GET['mail']);
   break;

    case "supprimer_groupe" :
    $supprimer=supprimer_groupe_admin($_GET['groupe']);
    break;

    case "modif_groupe_admin" :
    $modif=modif_groupe_admin($_GET['groupe']);
    break;

    case "afficher_clubs_admin" :
    $club=afficher_club_admin();
    break;

    case "supprimer_club" :
    $supp=supprimer_club($_GET['club']);
    break;

    case "supprimer_commentaire" :
    $supp=supp_comment($_GET['commentaire'],$_GET['club']);
    break;

    case "ignorer_notif" :
    $ignorer=ignorer_notif($_GET['groupe']);
    break;


  case "sport_participe":
  $participe=sportparticipe();
  break;

  case "modifier_faq" :
  $modif_faq=affiche_modif_faq($_GET['id']);
  break;

  case "supprimer_faq" :
  $supp=supprimer_faq($_GET['id']);
  break;

  case "forum":
  $accueil=afficher_sujet();
  break;

  case "afficher_creer_sujet":
  $sujet=creer_sujet();
  break;

  case "sujet" :
  $afficher_page=afficher_page($_GET['id'],$_GET['sujet']);
  break;

  case "supp_discussion" :
  $supprimer=supprimer_discussion($_GET['sujet'],$_GET['id']);
  break;


  case "sport_participe":
  $participe=sportparticipe();
  break;

  case "supp_message" :
  $supprimer=supprimer_message($_GET['message'],$_GET['id'],$_GET['sujet']);
  break;




    default:
    $_SESSION=array();
    session_destroy();
    $accueil=afficher_accueil();
    break;

  }
}
?>
