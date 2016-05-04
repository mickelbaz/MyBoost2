<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once '../Modeles/modeleUtilisateurs.php';

function verif(){
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
}

$verif_mdp=verif();

require_once '../Vues/vueModif_mdp.php';

  ?>
