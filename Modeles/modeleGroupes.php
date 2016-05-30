<?php

function verif_nom_groupe(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM groupe WHERE nom=?');
    $req->execute(array($_POST['nom']));
    $donnee=$req->fetch();
    if($donnee){
      return false;
    }
    else{
      return true;
    }
}

function add_groupe(){

  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO groupe (nom,description,nb_max,sport_groupe,pseudo_createur,region)
  VALUES (:nom,:description,:nb_max,:sport_groupe, :pseudo,:region)');

  $req->execute(array(
      'nom'=>$_POST['nom'],
      'description'=>$_POST['description'],
      'nb_max'=>$_POST['nb'],
      'sport_groupe'=>$_POST['sport'],
    'pseudo'=>$_SESSION['pseudo'],
    'region'=>$_POST['region']));
}


function afficher_groupe($nom_groupe){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom, sport_groupe, description, region, nb_max FROM groupe WHERE nom=? ORDER BY nom ASC' ) ;
  $req->execute(array($nom_groupe));
  return $req;
}

function recup_admin($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo_createur FROM groupe WHERE nom=?');
    $req->execute(array($groupe));
    return $req;
}

function recup_membre($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo FROM rejoindre WHERE nom_groupe=? ORDER BY pseudo ASC');
    $req->execute(array($groupe));
    return $req;
}

function recup_nb_place($groupe){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nb_max FROM groupe WHERE nom=?');
  $req->execute(array($groupe));
  return $req;
}

function add_rejoindre(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO rejoindre (pseudo,nom_groupe)
  VALUES (:pseudo,:nom_groupe)');

  $req->execute(array(
      'pseudo'=>$_SESSION['pseudo'],
      'nom_groupe'=>$_POST['nom']));
}


function recup_groupe_admin($pseudo){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM groupe WHERE pseudo_createur=? ORDER BY nom ASC');
    $req->execute(array($pseudo));
    return $req;
}

function recup_autre_groupe($pseudo){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom_groupe FROM rejoindre WHERE pseudo=? AND (nom_groupe NOT IN (SELECT nom FROM groupe WHERE pseudo_createur=?)) ORDER BY nom_groupe ASC ' );
  $req->execute(array($pseudo,$pseudo));
  return $req;
}

function recup_sport($pseudo){

  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT DISTINCT sport_groupe FROM groupe WHERE nom IN (SELECT nom_groupe FROM rejoindre WHERE pseudo=?)');
  $req->execute(array($pseudo));
  return $req;
}

function liste_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM groupe WHERE nom NOT IN (SELECT nom_groupe FROM rejoindre WHERE pseudo=? ) ORDER BY nom ASC');
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function rejoint($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO rejoindre (pseudo, nom_groupe) VALUES (:pseudo,:nom)');
    $req->execute(array(
      'pseudo'=>$_SESSION['pseudo'],
      'nom'=>$groupe
    ));
}

function quitter($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM rejoindre WHERE nom_groupe=?');
    $req->execute(array($groupe));
    $req2=$bdd->prepare('DELETE FROM participe WHERE nom_evenement IN(SELECT nom FROM évènement WHERE nom_groupe=?)');
    $req2->execute(array($groupe));
}

function supprimer($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM groupe WHERE nom=?');
    $req->execute(array($groupe));
    $req2=$bdd->prepare('DELETE FROM rejoindre WHERE nom_groupe=?');
    $req2->execute(array($groupe));
    $req3=$bdd->prepare('DELETE FROM participe WHERE nom_evenement IN(SELECT nom FROM évènement WHERE nom_groupe=?)');
    $req3->execute(array($groupe));
    $req4=$bdd->prepare('DELETE FROM évènement WHERE nom_groupe=?');
    $req4->execute(array($groupe));
    $req5=$bdd->prepare('DELETE FROM invitation WHERE nom_groupe=?');
    $req5->execute(array($groupe));

}

function dernier_groupe(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM groupe WHERE region IN(SELECT region FROM sportif WHERE pseudo=?) AND nom NOT IN (SELECT nom_groupe FROM rejoindre WHERE pseudo=? )');
    $req->execute(array($_SESSION['pseudo'],$_SESSION['pseudo']));
    return $req;
}

function supprimer_membre($nom_groupe,$pseudo){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('DELETE FROM rejoindre WHERE nom_groupe=? AND pseudo=?');
  $req->execute(array($nom_groupe,$pseudo));
  $req2=$bdd->prepare('DELETE FROM participe WHERE nom_evenement IN (SELECT nom FROM évènement WHERE nom_groupe=?) AND pseudo=?');
  $req2->execute(array($nom_groupe,$pseudo));
}

function inviter_membre_groupe(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO invitation (invite,nom_groupe,qui_invite) VALUES (:invite,:nom_groupe,:qui_invite)');
    $req->execute(array(
      'invite'=>$_POST['pseudo'],
      'nom_groupe'=> $_POST['groupe'],
      'qui_invite'=>$_SESSION['pseudo'] ));
}

function verif_membre_groupe($groupe,$pseudo){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo FROM rejoindre WHERE nom_groupe=? AND pseudo=?');
    $req->execute(array($groupe,$pseudo));
    $donnee=$req->fetch();
    if($donnee){
      return false;
    }
    else{
      return true;
    }
}

function replace_admin($nom_groupe,$pseudo){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('UPDATE groupe SET pseudo_createur=? WHERE nom=?');
  $req->execute(array($pseudo,$nom_groupe));
}


function replace_info($nom_groupe){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('UPDATE groupe SET nom=?, nb_max=?  WHERE nom=?');
  $req->execute (array($_POST['nom'], $_POST['nb'], $nom_groupe));
}

function recup_invitation(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom_groupe,qui_invite FROM invitation WHERE invite=?');
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function supprimer_invitation($nom_groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM invitation WHERE nom_groupe=? AND invite=? ');
    $req->execute(array($nom_groupe,$_SESSION['pseudo']));
}


function attente($nom_groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO attente (pseudo,nom_groupe) VALUES (:pseudo, :nom_groupe)');
    $req->execute(array(
      'pseudo'=>$_SESSION['pseudo'],
      'nom_groupe'=>$nom_groupe));
}

function recup_personne_attente($nom_groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo FROM attente WHERE nom_groupe=?');
    $req->execute(array($nom_groupe));
    return $req;
}

function supprimer_notif($nom_groupe){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('DELETE FROM attente WHERE nom_groupe=? AND pseudo=? ');
  $req->execute(array($nom_groupe,$_SESSION['pseudo']));
}

?>
