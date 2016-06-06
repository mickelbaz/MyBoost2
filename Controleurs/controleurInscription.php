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

            $destinataire=$_POST['mail'];
            $sujet="Confirmation d'inscription sur MyBoost";
            $entete="Inscription";
            $message="Merci de votre inscription sur MyBoost ".$_POST['pseudo']. "!
            ---------------------------
            Ceci est un mail automatique, ne pas répondre";
            mail($destinataire,$sujet,$message,$entete);

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


function affiche_condition(){
  require 'Vues/vueConditionGenerale.php';
}



?>
