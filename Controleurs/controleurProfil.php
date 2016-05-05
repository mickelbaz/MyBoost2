<?php session_start();

error_reporting(E_ALL & ~E_NOTICE); ?>
<?php
require '../Modeles/modeleUtilisateurs.php';

function recup(){
  $req=recup_infos()->fetch();
  return $req;
}

$a=recup();

require '../Vues/vueProfil.php';
 ?>
