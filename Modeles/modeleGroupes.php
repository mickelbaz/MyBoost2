<?php

function add_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO groupe (nom,description,nb_max,sport_groupe)
  VALUES (:nom,:description,:nb_max,:sport_groupe)');

  $req->execute(array(
      'nom'=>$_POST['nom'],
      'description'=>$_POST['description'],
      'nb_max'=>$_POST['nb'],
      'sport_groupe'=>$_POST['sport_groupe']));
}

function afficher_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT nom, sport_groupe FROM groupe WHERE nom=:nom' ) ;

  $req->execute(array(
      'nom'=>$_POST['nom']));
}
?>
