<?php

function add_groupe(){
  $bdd=new PDO('mysql:host=localhost; dbname=MyBoost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO groupe (nom,description,nb_max)
  VALUES (:nom,:description,:nb_max)');

  $req->execute(array(
      'nom'=>$_POST['nom'],
      'description'=>$_POST['description'],
      'nb_max'=>$_POST['nb']));
}
?>
