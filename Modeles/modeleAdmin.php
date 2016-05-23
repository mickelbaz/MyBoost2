<?php


$bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
function afficher_liste_membres(){
  $req=$bdd->query('SELECT pseudo FROM sportif');
  $req->fetchAll();
  return $req;
}
?>
