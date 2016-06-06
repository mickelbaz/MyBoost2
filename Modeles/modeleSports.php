<?php

function ajouter_sport(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO sport (nom,description,type_de_sport)
  VALUES (:nom,:description,:type)');
  $req->execute(array(
    'nom'=>$_POST['nomSport'],
    'description'=>$_POST['description'],
    'type'=>$_POST['type_de_sport']
  ));
}

function verif_sport($sport){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM sport WHERE nom=?');
  $req->execute(array($sport));
  $donnee=$req->fetch();
  if($donnee){
    return true;
  }
  else{
    return false;
  }
}

function recup_all_sport(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->query('SELECT nom FROM sport');
  return $req;
}

function description($sport){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT description FROM sport WHERE nom=?');
    $req->execute(array($sport));
    return $req;
}

function sport_par_type($type){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM sport WHERE type_de_sport=?');
    $req->execute(array($type));
    return $req;
}

?>
