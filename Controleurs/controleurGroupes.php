<?php

require_once '../Modeles/modeleGroupes.php';

function addgroupe(){

  if (isset($_POST['envoyer']) && $_POST['envoyer']<>""){

    if ($_POST['nom']<>"" && $_POST['description']<>"" && $_POST['nb']<>""){
      add_groupe();
      header("location: ../Vues/vueGroupe.php");
    }

    else {?>
        <script language="javascript">alert("Des champs n'ont pas été remplis");</script>
        <?php
    }
  }
}

$a = addgroupe();
require_once '../Vues/vueCreationGroupe.php';

?>
