<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

require_once 'Modeles/modeleEvenement.php';




function creer($nom){
  $salle=recup_salle_region($nom)->fetchAll();
  $date_jour=date('Y-m-d');
  $heure_jour=date('H:i:s');
  $date="{$_POST["annee"]}-{$_POST["mois"]}-{$_POST["jour"]}";
  $heure="{$_POST["heure"]}:{$_POST["minute"]}:00";
  if (isset($_POST['valider']) && $_POST['valider']<>""){
    if($_POST['nom']<>"" && $_POST['description']<>"" && $_POST['heure'] <>"" && $_POST['minute']<>"" && $_POST['nb']<>"" && $_POST['lieu'] !="title"){
      if (checkdate($_POST['mois'],$_POST['jour'], $_POST['annee'])==false){?>
        <script language="javascript">alert("La date n'est pas correcte !");</script>
      <?php
      }
      if($date_jour>$date){?>
        <script language="javascript">alert("La date n'est pas correcte !");</script>
      <?php
      }
      if($date_jour==$date){
        if($heure_jour>$heure){ ?>
        <script language="javascript">alert("L'heure n'est pas correcte !");</script>
      <?php
        }
      }
      if (verif_nom_event()==false){?>
        <script language="javascript">alert("Ce nom est déjà utilisé !");</script>
      <?php
      }
      if((checkdate($_POST['mois'],$_POST['jour'], $_POST['annee'])==true) && verif_nom_event()==true && $date_jour<$date){
        ajoutevent($nom);
        header ('location: index.php?page=groupe&groupe='.$nom);

      }
    }
    else{?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
    }
  }
  require_once 'Vues/vueCreationEvenement.php';
}
