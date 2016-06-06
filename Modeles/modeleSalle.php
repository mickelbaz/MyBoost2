<?php

function recup_salle(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->query('SELECT nom FROM salle ORDER BY nom ASC');
  return $req;
}

function recup_salle_region($nom_groupe){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom FROM salle WHERE region IN (SELECT region FROM groupe WHERE nom=?) ORDER BY nom ASC');
  $req->execute(array($nom_groupe));
  return $req;

}

function ajouter_salle(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO salle (nom,adresse,cp,ville,region,site) VALUES (:nom,:adresse,:cp,:ville,:region,:site)');
  $req->execute(array(
    'nom'=>$_POST['nom'],
    'adresse'=>$_POST['adresse'],
    'cp'=>$_POST['code_postal'],
    'ville'=>$_POST['ville'],
    'region'=>$_POST['region'],
    'site'=>$_POST['site']
  ));
}

function verif_salle(){
      $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT nom FROM salle WHERE nom=? AND adresse=?');
      $req->execute(array($_POST['nom'],$_POST['adresse']));
      $donnee=$req->fetch();
      if($donnee){
        return false;
      }
      else{
        return true;
      }
}

function recup_infos_salle($nom){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom,adresse,cp,ville,region,site FROM salle WHERE nom=?');
  $req->execute(array($nom));
  return $req;
}

function commenter($salle){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO commentaire (pseudo,commentaire,note,nom_club,date) VALUES (:pseudo,:commentaire,:note,:nom_club,:date)');
    $req->execute(array(
      'pseudo'=>$_SESSION['pseudo'],
      'commentaire'=>$_POST['commentaire'],
      'note'=>$_POST['note'],
      'nom_club'=>$salle,
      'date'=>date("Y-m-d")
    ));
}

function recup_commentaire($nom){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT pseudo,date,commentaire,note FROM commentaire WHERE nom_club=?');
  $req->execute(array($nom));
  return $req;
}



 ?>
