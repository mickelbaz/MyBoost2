<?php

    //require '../Modeles/modelePropositionSport.php';

    function afficherproposport(){
      if(isset($_POST['envoyer']) && $_POST['envoyer']<>""){
        if($_POST["nomSport"]<>"" && $_POST['description'] <>"" && $_POST["type_de_sport"] <>""){
          ajout_sport();
          header('location: index.php?page=sports');
        }
        else{?>
          <script language="javascript">alert("Un champ n'est pas rempli !");</script>
          <?php
        }
      }
      require 'Vues/vuePropositionSport.php';
    }
?>
