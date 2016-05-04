<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once '../Modeles/modeleUtilisateurs.php';



function verif(){
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
          header("location: ../Controleurs/controleurProfil.php");
        }
      }
      else{
        ?>
          <script language="javascript">alert("Un champ n'est pas rempli !");</script>
          <?php
      }
  }
}

$verif_mail=verif();

require_once '../Vues/vueModif_mail.php';

  ?>
