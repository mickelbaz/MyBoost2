<?php session_start();
error_reporting(E_ALL & ~E_NOTICE);?>
<?php

function recup_donnees(){
  $req=recup_infos()->fetch();
  return $req;
}

function affiche_page(){
  $a=recup_donnees();
  require 'Vues/vueModif_profil.php';
}

function verif_coordonnees(){
  if (isset($_POST['valider']) && $_POST['valider']<>""){
    if ($_POST['adresse']<>"" && $_POST['cp'] <> "" && $_POST['ville']<>"" && $_POST['pays']<>"" && $_POST['tel']<>""){
      replace_coordonnees();
      header("location: index.php?page=profil");
  }
  else {?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
  }
}
$a=recup_donnees();
require_once 'Vues/vueModif_coordonnees.php';
}

function modif_mail(){
  $mail=verif_existe_mail()->fetch();
  if (isset($_POST['valider']) && $_POST['valider']<>""){
      if ($_POST['mail_old']<>"" && $_POST['mail_new'] <> "" && $_POST['mail_new2']<>""){
        if ($_POST['mail_new']!=$_POST['mail_new2']){?>
          <script language="javascript">alert("Les nouvelles adresses mail ne sont pas identiques !");</script>
        <?php
        }
        if ($_POST['mail_old']!=$mail[0]){?>
          <script language="javascript">alert("L'ancienne adresse mail n'est pas valide !");</script>
        <?php
        }
        if($_POST['mail_old']==$mail[0] && $_POST['mail_new']==$_POST['mail_new2']){ ?>
          <script language="javascript">alert("Votre modification a bien été prise en compte !");</script>
        <?php
          replace_mail();
          header("location: index.php?page=profil");
        }
      }
      else{
        ?>
          <script language="javascript">alert("Un champ n'est pas rempli !");</script>
          <?php
      }
  }
  require_once 'Vues/vueModif_mail.php';
}


function modif_mdp(){
  $mdp=verif_existe_mdp()->fetch();
  if (isset($_POST['valider']) && $_POST['valider']<>""){
      if ($_POST['mdp_old']<>"" && $_POST['mdp_new'] <> "" && $_POST['mdp_new2']<>""){
        if ($_POST['mdp_new']!=$_POST['mdp_new2']){?>
          <script language="javascript">alert("Les nouveaux mots de passe ne sont pas identiques !");</script>
        <?php
          }
          if (sha1($_POST['mdp_old'])!=$mdp[0]){?>
            <script language="javascript">alert("L'ancien mot de passe n'est pas valide !");</script>
          <?php
          }
          if(sha1($_POST['mdp_old'])==$mdp[0] && $_POST['mdp_new']==$_POST['mdp_new2']){ ?>
            <script language="javascript">alert("Votre modification a bien été prise en compte !");</script>
          <?php
            replace_mdp();
            header("location: ../Controleurs/controleurProfil.php");
          }
      }
      else{
        ?>
          <script language="javascript">alert("Un champ n'est pas rempli !");</script>
          <?php
      }
  }
  require_once 'Vues/vueModif_mdp.php';
}




?>
