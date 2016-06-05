<?php
require_once 'Modeles/modeleForum.php';
require_once 'Modeles/modeleUtilisateurs.php';

function afficher_sujet(){
  $sujet = recup_sujet()->fetchAll();
  if(isset($_POST['ok']) && $_POST['ok']<>"" && $_POST['sujet'] <>""){
      ajouter_sujet();
      header('location: index.php?page=forum');
  }
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


function supprimer_discussion($sujet,$id){
  $supp=supprimer_sujet($sujet,$id);
  header('location: index.php?page=forum');
}

function supprimer_message($message,$id,$sujet){
  $supp=supp_message($message);
  header('location: index.php?page=sujet&id='.$id.'&sujet='.$sujet);
}



?>
