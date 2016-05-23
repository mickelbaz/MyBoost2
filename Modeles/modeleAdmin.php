<?php


function membres_admin(){

  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $membres=$bdd->query('SELECT pseudo FROM sportif');
  $membres->fetchAll();
  return $req;
}

function groupes_admin(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $groupes=$bdd->query('SELECT * FROM groupe');
  $groupes->fetchAll();
  return $groupes;
}

?>
