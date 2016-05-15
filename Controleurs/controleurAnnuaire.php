<?php


function affiche_annuaire(){
  $membre=annuaire()->fetchAll();
  $gpe=recup_groupe_admin($_SESSION['pseudo'])->fetchAll();
  if(isset($_POST['valider']) && $_POST['valider'] <>""){
      if($_POST['pseudo'] !="title" && $_POST['groupe'] != "title"){
           if (verif_membre_groupe()==false){?>
              <script language="javascript">alert("Le membre fait déjà parti du groupe !");</script>
              <?php
           }
           else{
               ajout_membre_groupe($_POST['groupe'],$_POST['pseudo']);
               header ('location: index.php?page=groupe&groupe='.$_POST['groupe']);
           }
        }
        else{?>
            <script language="javascript">alert("Membre ou groupe non valide !");</script>
          <?php
          }
  }
  require 'Vues/vueAnnuaire.php';
}


?>
