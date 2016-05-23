<?php


function afficher_liste_membres(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo!=?');
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function supprimer_personne_bdd($pseudo){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM sportif WHERE pseudo=?');
    $req->execute(array($pseudo));
    $req2=$bdd->prepare('DELETE FROM groupe WHERE pseudo_createur=?');
    $req2->execute(array($pseudo));
    $req3=$bdd->prepare('DELETE FROM participe WHERE pseudo=?');
    $req3->execute(array($pseudo));
    $req4=$bdd->prepare('DELETE FROM rejoindre WHERE pseudo=?');
    $req4->execute(array($pseudo));
    $req5=$bdd->prepare('DELETE FROM commentaire WHERE pseudo=?');
    $req5->execute(array($pseudo));
    $req6=$bdd->prepare('DELETE FROM invitation WHERE qui_invite=?');
    $req6->execute(array($pseudo));
}

function membre_banni($pseudo){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO bannir (pseudo) VALUES (:pseudo)');
    $req->execute(array('pseudo'=>$pseudo));
}



?>
