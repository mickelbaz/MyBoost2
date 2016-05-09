<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);


require_once '../Modeles/modeleGroupes.php';

function addgroupe(){
  if (isset($_POST['envoyer']) && $_POST['envoyer']<>""){
    if ($_POST['nom']<>"" && $_POST['description']<>"" && $_POST['nb']<>""  && verif_nom_groupe()==true){
      add_groupe();
      add_rejoindre();
      header("location: ../Controleurs/controleurPageGroupe.php");
    }
    if ($_POST['sport']=="title") {?>
      <script language="javascript">alert("Veuillez choisir un sport");</script>
      <?php
    }
    if (verif_nom_groupe()==false){?>
      <script language="javascript">alert("Ce nom est déjà utilisé !");</script>
      <?php
    }
    else {?>
        <script language="javascript">alert("Des champs n'ont pas été remplis");</script>
        <?php
    }
  }
}

<<<<<<< HEAD:Controleurs/controleurGroupes.php
function infogroupe(){
  $req=afficher_groupe()->fetch();
  return $req;
}

=======
>>>>>>> e9793357244eebc719ada22340347171e92c9120:Controleurs/controleurCreationGroupes.php
$a = addgroupe();
require_once '../Vues/vueCreationGroupe.php';



?>
