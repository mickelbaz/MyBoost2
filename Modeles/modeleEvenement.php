<?php

function verif_nom_event(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
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
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('INSERT INTO évènement (nom,description,lieu,date,heure,nom_groupe,nb_place,createur) VALUES(:nom,:description,:lieu,:date,:heure, :nom_groupe,:nb_place,:createur)');
      $req->execute(array(
        'nom'=>$_POST['nom'],
        'description'=>$_POST['description'],
        'lieu'=>$_POST['lieu'],
        'date'=>$date,
        'heure'=>$heure,
        'nom_groupe'=>$nom_groupe,
        'nb_place'=>$_POST['nb'],
        'createur'=>$_SESSION['pseudo']
      ));
  }

  function recup_infos_event($nom_groupe){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nom,description,date,heure,lieu,nb_place FROM évènement WHERE nom_groupe=? AND nom NOT IN (SELECT nom_evenement FROM participe WHERE pseudo=? ) ORDER BY date,heure');
    $req->execute(array($nom_groupe,$_SESSION['pseudo']));
    return $req;
  }

  function participe($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('INSERT INTO participe (pseudo,nom_evenement) VALUES (:pseudo,:nom_evenement)');
      $req->execute(array(
        'pseudo'=>$_SESSION['pseudo'],
        'nom_evenement'=>$nom_event
      ));
  }


  function recup_evenement($pseudo){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT nom,description, date,heure,nb_place,nom_groupe,lieu FROM évènement WHERE nom IN (SELECT nom_evenement FROM participe WHERE pseudo=?) ORDER BY date,heure');
      $req->execute(array($pseudo));
      return $req;
  }

  function nb_participants($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT pseudo FROM participe WHERE nom_evenement=?');
      $req->execute(array($nom_event));
      return $req;
  }

  function nb_place($nom_event){
    $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT nb_place FROM évènement WHERE nom=?');
    $req->execute(array($nom_event));
    return $req;
  }

  function quitter_evenement($nom){
      $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('DELETE FROM participe WHERE nom_evenement=?');
      $req->execute(array($nom));
  }

  function recup_mes_evenement($pseudo,$groupe){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT nom,description, date,heure,lieu FROM évènement WHERE nom_groupe=? AND nom IN (SELECT nom_evenement FROM participe WHERE pseudo=?) ORDER BY date,heure');
      $req->execute(array($groupe,$pseudo));
      return $req;
  }

  function admin_event($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT createur FROM évènement WHERE nom=?');
      $req->execute(array($nom_event));
      return $req;
  }

  function annuler($nom_event){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('DELETE FROM évènement WHERE nom=?');
      $req->execute(array($nom_event));
      $req2=$bdd->prepare('DELETE FROM participe WHERE nom_evenement=?');
      $req2->execute(array($nom_event));
  }









  ?>
