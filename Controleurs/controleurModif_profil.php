<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);?>
<?php
require '../Modeles/modeleUtilisateurs.php';

if (isset($_POST['modif_coordonnees']) && $_POST['modif_coordonnees']<>""){
  header("location: ../Controleurs/controleurModif_coordonnees.php");
}

if (isset($_POST['modif_mail']) && $_POST['modif_mail']<>""){
  header("location: ../Controleurs/controleurModif_mail.php");
}

if (isset($_POST['modif_mdp']) && $_POST['modif_mdp']<>""){
    header("location: ../Controleurs/controleurModif_mdp.php");
}



function recup(){
  $req=recup_infos()->fetch();
  return $req;
}

$a=recup();

require'../Vues/vueModif_profil.php';


?>
