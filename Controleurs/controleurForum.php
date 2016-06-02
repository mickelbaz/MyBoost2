<?php

require_once 'Modeles/modeleUtilisateurs.php';


function afficher_sujet(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $reponse = recup_sujet()->fetchAll();
  $sujets = count_sujets()->fetchAll();
  require_once 'Vues/vueForum.php';

}

function afficher_sujet1() {
  require_once 'Vues/vueSujet.php';
}

function creer_sujet() {
  require_once 'Vues/vueCreerSujet.php';

}
function nouveau_sujet(){
    $nouveau_sujet=ajouter_sujet()->fetchAll();
    if(isset($_POST['Valider']) && $_POST['Valider'] <>""){

      
    }

    echo "La discussion a bien été ajoutée ! Merci ";
    require_once '../Vues/vueForum.php';
}


?>
