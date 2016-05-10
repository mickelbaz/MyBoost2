<?php

function verif_nom_groupe(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
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
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO groupe (nom,description,nb_max,sport_groupe,pseudo_createur)
  VALUES (:nom,:description,:nb_max,:sport_groupe, :pseudo)');

  $req->execute(array(
      'nom'=>$_POST['nom'],
      'description'=>$_POST['description'],
      'nb_max'=>$_POST['nb'],
      'sport_groupe'=>$_POST['sport_groupe'],
    'pseudo'=>$_SESSION['pseudo']));
}

function afficher_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom, sport_groupe FROM groupe WHERE pseudo_createur=?' ) ;
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function add_rejoindre(){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO rejoindre (pseudo,nom_groupe)
  VALUES (:pseudo,:nom_groupe)');

  $req->execute(array(
      'pseudo'=>$_SESSION['pseudo'],
      'nom_groupe'=>$_POST['nom']));
}

function recup_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom_groupe FROM rejoindre WHERE pseudo=?');
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function recup_sport(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT sport_groupe FROM groupe WHERE nom=?');
  $req->execute(array(rejoindre.$_SESSION['pseudo']));
  return $req;
}

function liste_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->query('SELECT nom FROM groupe');
  return $req;
}

?>
