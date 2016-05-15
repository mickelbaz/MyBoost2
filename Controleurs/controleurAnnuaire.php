<?php


function afficher_annuaire(){
  $membre=annuaire()->fetchAll();
  $gpe=recupgroupeadmin($_SESSION['pseudo']);

  require 'Vues/vueAnnuaire.php';
}



?>
