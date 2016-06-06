<?php



    function afficherproposport(){

      if(isset($_POST['envoyer']) && $_POST['envoyer']<>""){
        if($_POST["nomSport"]<>"" && $_POST['description'] <>"" && $_POST["type_de_sport"] <>""){
          if(verif_sport($_POST['nomSport'])==true){?>
              <script language="javascript">alert("Ce sport existe déjà !");</script>
            <?php
          }
          else{
            ajouter_sport();
            header('location: index.php?page=sports');
          }

        }
        else{?>
          <script language="javascript">alert("Un champ n'est pas rempli !");</script>
          <?php
        }
      }
      require_once 'Vues/vuePropositionSport.php';
    }
?>
