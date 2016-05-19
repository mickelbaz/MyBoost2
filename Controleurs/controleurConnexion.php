<?php
require_once 'Modeles/modeleUtilisateurs.php';


function connect(){
  if($resultat  || $resultat_admin){
    if (isset($_POST['connection']) && $_POST['connection']=="Valider"){
    $resultat_admin=verif_id2()->fetch();
    $resultat=verif_id()->fetch();
    //var_dump($resultat);
    //var_dump($resultat_admin);
    if(!$resultat_admin || !$resultat){
    echo 'Pseudo ou mot de passe incorrect';
    }

    if ($resultat){
      session_start();
      $_SESSION['pseudo']=$_POST['pseudo'];?>
      <script language="javascript">alert("<?php echo 'Bonjour ' . $_SESSION['pseudo'] . ' ' ?>!");</script><?php
      header("location: index.php?page=accueil");
    }
    if($resultat_admin){
      session_start();
      $_SESSION['pseudo']=$_POST['pseudo'];
      echo 'Bonjour ' . $_SESSION['pseudo'] . ' !';
      header("location: index.php?page=admin");
    }
  }
  }
    require 'Vues/vueConnexion.php';
}




?>
