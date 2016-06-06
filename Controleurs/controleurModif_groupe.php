<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);?>
<?php
function modif_groupe($nom_groupe){
  $donnees=afficher_groupe($nom_groupe)->fetch();
  $membre=recup_membre($nom_groupe)->fetchAll();
  if (isset($_POST['envoyer']) && $_POST['envoyer']<>""){
    if ($_POST['nom']<>""  && $_POST['nb']<>""){
      replace_info($nom_groupe);
      header('location: index.php?page=groupe&groupe='.$nom_groupe);
    }
    else {?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
    }
  }
require_once 'Vues/vueModif_groupe.php';
}
?>
