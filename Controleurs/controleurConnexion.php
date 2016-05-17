<?php

require_once 'Modeles/modeleUtilisateurs.php';


function connect(){


  if {
    isset($_POST['connexion']) && $_POST['connexion']=="Valider"){
    $resultat_admin=verif_id()->fetch();
    $resultat=verif_id()->fetch();
    if(!$resultat_admin || !$resultat){
    echo 'Pseudo ou mot de passe incorrect';
  }


      if ($resultat){
        session_start();
        $_SESSION['pseudo']=$_POST['pseudo'];
        echo 'Bonjour ' . $_SESSION['pseudo'] . ' !';
        header("location: index.php?page=accueil");
      }
      if($resultat_admin){
        session_start();
        $_SESSION['pseudo']=$_POST['pseudo'];
        echo 'Bonjour ' . $_SESSION['pseudo'] . ' !';
        header("location: index.php?page=admin");

      }

    }
    require 'Vues/vueConnexion.php';
}




?>
