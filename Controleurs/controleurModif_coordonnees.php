<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once '../Modeles/modeleUtilisateurs.php';

function recup(){
  $req=recup_infos()->fetch();
  return $req;
}
$a=recup();

function verif(){
  if (isset($_POST['valider']) && $_POST['valider']<>""){
    if ($_POST['adresse']<>"" && $_POST['cp'] <> "" && $_POST['ville']<>"" && $_POST['pays']<>"" && $_POST['tel']<>""){
      replace_coordonnees();
      header("location: ../Controleurs/controleurProfil.php");
  }
  else {?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
  }
} 
}


$verif_coordonnees=verif();
require_once '../Vues/vueModif_coordonnees.php';
?>
