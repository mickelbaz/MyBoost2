<?php
require_once 'Modeles/modeleForum.php';
require_once 'Modeles/modeleUtilisateurs.php';

function afficher_sujet(){
  $sujet = recup_sujet()->fetchAll();
  require_once 'Vues/vueForum.php';
}

function afficher_page($id,$sujet) {
  $message=recup_message($id)->fetchAll();
  if(isset($_POST['Envoyer']) && $_POST['Envoyer'] <>"" && $_POST['discussion']<>""){
    ajouter_message();
    header('location: index.php?page=sujet&id='.$id.'&sujet='.$sujet);
  }
  require_once 'Vues/vueSujet.php';
}


function creer_sujet() {
  if (isset($_POST['Valider']) && $_POST['Valider']=="Valider" && $_POST['sujet']<>""){
    ajouter_sujet(); ?>
    <script language="javascript">alert("Merci d'avoir ajouté votre sujet de discussion !");</script><?php
    header('location: index.php?page=forum');
  }
    require_once 'Vues/vueCreerSujet.php';
}

function supprimer_discussion($sujet,$id){
  $supp=supprimer_sujet($sujet,$id);
  header('location: index.php?page=forum');
}

function supprimer_message($message,$id,$sujet){
  $supp=supp_message($message);
  header('location: index.php?page=sujet&id='.$id.'&sujet='.$sujet);
}



?>
