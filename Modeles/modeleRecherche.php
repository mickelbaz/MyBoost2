<?php

function recherche_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM groupe WHERE nom LIKE :requete');
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_membre(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare("SELECT pseudo FROM sportif WHERE pseudo LIKE :requete");
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_sport(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare("SELECT nom FROM sport WHERE nom LIKE :requete");
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_club(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare("SELECT nom FROM salle WHERE nom LIKE :requete");
  $req->execute(array('requete'=>'%'.$_GET['recherche'].'%'));
  return $req;
}

function recherche_avancee_groupe($region,$sport){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    if($region=="title"){
      $req=$bdd->prepare('SELECT nom FROM groupe WHERE sport_groupe=? ORDER BY nom ASC');
      $req->execute(array($sport));
    }
    if($sport=="title"){
      $req=$bdd->prepare('SELECT nom FROM groupe WHERE region=? ORDER BY nom ASC');
      $req->execute(array($region));
    }
    if($sport=="title" && $region=="title"){
      $req=$bdd->query('SELECT nom FROM groupe ORDER BY nom ASC');
    }
    if($sport!="title" && $region!="title"){
      $req=$bdd->prepare('SELECT nom FROM groupe WHERE region=? AND sport_groupe=? ORDER BY nom ASC');
      $req->execute(array($region,$sport));
    }
    return $req;
}

function recherche_avancee_club($region,$sport){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  if($region=="title"){
    $req=$bdd->query('SELECT nom FROM salle ORDER BY nom ASC');
  }
  if($sport=="title"){
    $req=$bdd->prepare('SELECT nom FROM salle WHERE region=? ORDER BY nom ASC');
    $req->execute(array($region));
  }
  if($sport=="title" && $region=="title"){
    $req=$bdd->query('SELECT nom FROM salle ORDER BY nom ASC');
  }
  if($sport!="title" && $region!="title"){
    $req=$bdd->prepare('SELECT nom FROM salle WHERE region=? ORDER BY nom ASC');
    $req->execute(array($region));
  }
  return $req;
}

function recherche_avancee_membre($region,$sport){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  if($region=="title"){
    $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo IN(SELECT pseudo FROM rejoindre WHERE nom_groupe IN (SELECT nom FROM groupe WHERE sport_groupe=?)) ORDER BY pseudo ASC');
    $req->execute(array($sport));
  }
  if($sport=="title"){
    $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo IN(SELECT pseudo FROM rejoindre WHERE nom_groupe IN(SELECT nom FROM groupe WHERE region=?)) ORDER BY pseudo ASC');
    $req->execute(array($region));
  }
  if($sport=="title" && $region=="title"){
    $req=$bdd->query('SELECT pseudo FROM sportif ORDER BY pseudo ASC');
  }
  if($sport!="title" && $region!="title"){
    $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo IN (SELECT pseudo FROM rejoindre WHERE nom_groupe IN (SELECT nom FROM groupe WHERE region=? AND sport_groupe=?)) ORDER BY pseudo ASC');
    $req->execute(array($region,$sport));
  }
  return $req;
}




 ?>
