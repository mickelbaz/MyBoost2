<?php
require 'Modeles/modeleAdmin.php';

function affiche_faq(){
  $texte=recup_faq()->fetchAll();
  if(isset($_POST['ajouter']) && $_POST['ajouter']<>""){
    ajouter_faq();
    header('location: index.php?page=faq');
  }
  require 'Vues/vueFAQ.php';
}

function affiche_modif_faq($id){
  $texte=recup_faq_id($id)->fetchAll();
  if(isset($_POST['modifier']) && $_POST['modifier'] <>""){
    modif_faq();
    header('location: index.php?page=faq');
  }
  require 'Vues/vueModif_faq.php';
}
?>
