<?php

function recherche_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM groupe WHERE nom LIKE :requete');
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_membre(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare("SELECT pseudo FROM sportif WHERE pseudo LIKE :requete");
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_sport(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare("SELECT nom FROM sport WHERE nom LIKE :requete");
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_club(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare("SELECT nom FROM salle WHERE nom LIKE :requete");
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_groupe_region($region){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT nom FROM groupe WHERE region=?');
      $req->execute(array($region));
      return $req;
}

function recherche_groupe_sport($sport){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM groupe WHERE sport_groupe=?');
  $req->execute(array($sport));
  return $req;
}

function recherche_groupe_sport_region($sport,$region){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM groupe WHERE sport_groupe=? AND region=?');
  $req->execute(array($sport,$region));
  return $req;
}

function recherche_all_groupe(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->query('SELECT nom FROM groupe');
    return $req;
}

function recherche_membre_region($region){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE region=?');
  $req->execute(array($region));
  return $req;
}

function recherche_membre_sport($sport){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo IN ( SELECT pseudo FROM rejoindre WHERE nom_groupe IN (SELECT nom FROM groupe WHERE sport_groupe=?))');
  $req->execute(array($sport));
  return $req;
}

function recherche_membre_sport_region($sport,$region){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req->prepare('SELECT pseudo FROM sportif WHERE region=? AND pseudo IN ( SELECT pseudo FROM rejoindre WHERE nom_groupe IN (SELECT nom FROM groupe WHERE sport_groupe=?))');
    $req->execute(array($sport,$region));
    return $req;
}

function recherche_all_membre(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->query('SELECT nom FROM sportif');
    return $req;
}

function recherche_club_region($region){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM salle WHERE region=?');
    $req->execute(array($region));
    return $req;
}

function recherche_all_club(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->query('SELECT nom FROM salle');
    return $req;
}



 ?>
