<?php

require_once 'Modeles/modeleUtilisateurs.php';

function verif(){

  if (isset($_POST['envoyer']) && $_POST['envoyer']<>""){

    if ($_POST['nom']<>"" && $_POST['prenom'] <> "" &&$_POST['pseudo']<>"" && ((isset($_POST['sexe']) && $_POST["sexe"]=="F")||(isset($_POST['sexe']) && $_POST["sexe"]=="H"))
    && $_POST['adresse']<>"" && $_POST['code_postal']<>"" && $_POST['region'] !="title"
    && $_POST['ville']<>"" && $_POST['pays']<>"" && $_POST['tel']<>"" && $_POST['mail']<>"" && $_POST['mail2']<>""
    && $_POST['mot_de_passe']<>"" && $_POST['mot_de_passe2']<>""){

      if ($_POST['mot_de_passe']!=$_POST['mot_de_passe2']){?>
        <script language="javascript">alert("Les mots de passe ne sont pas identiques !");</script>
        <?php
      }

      if ($_POST['mail']!=$_POST['mail2']){?>
        <script language="javascript">alert("Les adresses mail ne sont pas identiques !");</script>
      <?php
        }

      if (checkdate($_POST['mois'],$_POST['jour'], $_POST['annee'])==false){?>
        <script language="javascript">alert("La date de naissance n'est pas correcte !");</script>
      <?php
      }

      if (verif_pseudo()==false){?>
        <script language="javascript">alert("Ce pseudo est déjà utilisé !");</script>
      <?php
      }
      if ($_POST['mail']==$_POST['mail2'] && verif_mail()==false){?>
          <script language="javascript">alert("Vous êtes déjà inscrit, connectez-vous !");</script>
      <?php
      }
      if ($_POST['mail']==$_POST['mail2'] && verif_bannir()==true){?>
          <script language="javascript">alert("Vous avez été banni du site, contactez notre service client !");</script>
      <?php
      }

      /*if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
        $tailleMax = 2097152;
        $extensionValides = array('jpg', 'jpeg', 'gif', 'png');
        if ($_FILES['avatar']['size'] <= $tailleMax) {
          $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
          if(in_array($extensionUpload, $extensionValides)) {
            $chemin = "Images/Avatars/".$_SESSION['id'].".".$extensionUpload;
            $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);

          }
          else {?>
              <script language="javascript">alert("Votre photo de profil doit être au format jpg, jpeg, gif ou png");</script>
          <?php

          }
        }
        else {?>
            <script language="javascript">alert("Votre photo de profil ne doit pas dépasser 2 Mo");</script>
        <?php

        }
      }*/

      if ($_POST['mot_de_passe']==$_POST['mot_de_passe2'] && $_POST['mail']==$_POST['mail2']
      && checkdate($_POST['mois'],$_POST['jour'], $_POST['annee'])&& verif_pseudo()==true && verif_mail()==true && verif_bannir()==false){
        if(!isset($_POST['condition'])){?>
            <script language="javascript">alert("Vous devez accepter les conditions générales !");</script>
          <?php
        }else{?>

          <?php
            ajout();
            session_start();
            $_SESSION['pseudo']=$_POST['pseudo'];
            header("location: index.php?page=profil");
        }
      }
    }
      else{?>
        <script language="javascript">alert("Un champ n'est pas rempli !");</script>
        <?php
      }
    }
      require_once 'Vues/vueInscription.php';
  }




?>
