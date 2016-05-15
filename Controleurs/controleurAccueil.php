<?php
require 'Modeles/modeleGroupes.php';

function afficher_accueil(){
  $groupe=dernier_groupe()->fetchAll();
  require 'Vues/vueAccueil.php';
}


?>
