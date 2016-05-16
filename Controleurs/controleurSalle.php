<?php
require 'Modeles/modeleSalle.php';

function affiche_salle(){
  $salle=recup_salle()->fetchAll();
  require 'Vues/vueListeSalle.php';
}

function ajouter_club(){
  if(isset($_POST['envoyer']) && $_POST['envoyer']<>""){
    if($_POST['nom']<>"" && $_POST['adresse']<>"" && $_POST['code_postal']<>"" && $_POST['ville']<>"" && $_POST['region'] !="title" && $_POST['site']<>""){
        if(verif_salle()==false){?>
            <script language="javascript">alert("Cette salle existe déjà !");</script>
          <?php
        }
        else{
          ajouter_salle();
        }
    }
    else{?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
    }
  }
  require 'Vues/vueAjouterClub.php';
}

function page_salle($nom){
  $infos=recup_infos_salle($nom)->fetchAll();
  $comment=recup_commentaire($nom)->fetchAll();
  if(isset($_POST['envoyer']) && $_POST['envoyer'] <>""){
    if($_POST['commentaire']<>"" && $_POST['note']<>""){
        commenter();
        header('location: index.php?page=club&club='.$nom);
    }
    else{?>
        <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
    }
  }
  require 'Vues/vuePageSalle.php';
}

 ?>
