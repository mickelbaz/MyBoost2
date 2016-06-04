<?php
require_once 'Modeles/modeleForum.php';
require_once 'Modeles/modeleUtilisateurs.php';
 ?>

<?php


function afficher_sujet(){
  //$reponse = recup_sujet()->fetchAll();
  $sujets = count_sujets()->fetchAll();
  require_once 'Vues/vueForum.php';

}

function afficher_sujet1() {
  //$reponse = recup_sujet()->fetchAll();
  require_once 'Vues/vueSujet.php';
}

function ajouter_message(){
  if(isset($_POST['Envoyer'])){
    ajouterMessage();
    require_once ('../Vues/vueSujet.php');

  }

}

function creer_sujet() {
  if (isset($_POST['Valider']) && $_POST['Valider']=="Valider" && $_POST['sujet']<>"" && $_POST['pseudo']<>""){
    ajouter_sujet();

     ?>
    <script language="javascript">alert("Merci d'avoir ajouté votre sujet de discussion !");</script><?php }
    require_once 'Vues/vueForum.php';
}

function afficher_creer_sujet(){
  require_once 'Vues/vueCreerSujet.php';
}

?>
