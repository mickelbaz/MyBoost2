<?php

function verif_nom_event(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom FROM évènement WHERE nom=?');
    $req->execute(array($_POST['nom']));
    $donnee=$req->fetch();
    if($donnee){
      return false;
    }
    else{
      return true;
    }
  }

  function ajoutevent($nom_groupe){
      $date="{$_POST["annee"]}-{$_POST["mois"]}-{$_POST["jour"]}";
      $heure="{$_POST["heure"]}:{$_POST["minute"]}:00";
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('INSERT INTO évènement (nom,description,date,heure,nom_groupe,nb_place) VALUES(:nom,:description,:date,:heure, :nom_groupe,:nb_place)');
      $req->execute(array(
        'nom'=>$_POST['nom'],
        'description'=>$_POST['description'],
        'date'=>$date,
        'heure'=>$heure,
        'nom_groupe'=>$nom_groupe,
        'nb_place'=>$_POST['nb']
      ));
  }

  function recup_infos_event($nom_groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom,description,date,heure,nb_place FROM évènement WHERE nom_groupe=?');
    $req->execute(array($nom_groupe));
    return $req;
  }

  function participe($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('INSERT INTO participe (pseudo,nom_evenement) VALUES (:pseudo,:nom_evenement)');
      $req->execute(array(
        'pseudo'=>$_SESSION['pseudo'],
        'nom_evenement'=>$nom_event
      ));
  }

  function recup_participant($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT pseudo FROM participe WHERE nom_evenement=?');
      $req->execute(array($nom_event));
      return $req;
  }

  function recup_evenement(){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT nom_evenement FROM participe WHERE pseudo=?');
      $req->execute(array($_SESSION['pseudo']));
      return $req;
  }

  function nb_participants($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT pseudo FROM participe WHERE nom_evenement=?');
      $req->execute(array($nom_event));
      return $req;
  }

  function nb_place($nom_event){
    $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nb_place FROM évènement WHERE nom=?');
    $req->execute(array($nom_event));
    return $req;
  }




  ?>
