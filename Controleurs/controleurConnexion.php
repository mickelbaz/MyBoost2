<?php

require_once '../Modeles/modeleUtilisateurs.php';

function connect(){
    if (isset($_POST['connection']) && $_POST['connection']=="Valider"){
      $resultat=verif_id()->fetch();
      if(!$resultat){
        echo 'Pseudo ou mot de passe incorrect';
      }
       else{
        session_start();
        $_SESSION['pseudo']=$_POST['pseudo'];
        echo 'Vous êtes connecté';
      }
    }
}

$connect=connect();
require '../Vues/vueConnexion.php';
?>
