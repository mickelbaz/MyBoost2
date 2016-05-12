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

  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO groupe (nom,description,nb_max,sport_groupe,pseudo_createur)
  VALUES (:nom,:description,:nb_max,:sport_groupe, :pseudo)');


  $req->execute(array(
      'nom'=>$_POST['nom'],
      'description'=>$_POST['description'],
      'nb_max'=>$_POST['nb'],
      'sport_groupe'=>$_POST['sport_groupe'],
    'pseudo'=>$_SESSION['pseudo']));
}


function afficher_groupe($nom_groupe){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom, sport_groupe,description FROM groupe WHERE nom=?' ) ;
  $req->execute(array($nom_groupe));
  return $req;
}

function recup_admin($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo_createur FROM groupe WHERE nom=?');
    $req->execute(array($groupe));
    return $req;
}

function recup_membre($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo FROM rejoindre WHERE nom_groupe=?');
    $req->execute(array($groupe));
    return $req;
}

function add_rejoindre(){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO rejoindre (pseudo,nom_groupe)
  VALUES (:pseudo,:nom_groupe)');

  $req->execute(array(
      'pseudo'=>$_SESSION['pseudo'],
      'nom_groupe'=>$_POST['nom']));
}


function recup_groupe_admin(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM groupe WHERE pseudo_createur=?');
    $req->execute(array($_SESSION['pseudo']));
    return $req;
}

function recup_autre_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom_groupe FROM rejoindre WHERE pseudo=? AND (nom_groupe NOT IN (SELECT nom FROM groupe WHERE pseudo_createur=?)) ' );
  $req->execute(array($_SESSION['pseudo'],$_SESSION['pseudo']));
  return $req;
}

function recup_sport(){

  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT DISTINCT (sport_groupe) FROM groupe WHERE nom IN (SELECT nom_groupe FROM rejoindre WHERE pseudo=?)');
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function liste_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM groupe WHERE nom NOT IN (SELECT nom_groupe FROM rejoindre WHERE pseudo=? )');
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
}

function supprimer($groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM groupe WHERE nom=?');
    $req->execute(array($groupe));
    $req2=$bdd->prepare('DELETE FROM rejoindre WHERE nom_groupe=?');
    $req2->execute(array($groupe));

}







?>
