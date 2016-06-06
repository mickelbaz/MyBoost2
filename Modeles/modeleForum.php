<?php

function recup_sujet(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req = $bdd->query("SELECT * FROM sujet");
    return $req;
}

function ajouter_message(){
  $date_jour=date('Y-m-d');
  $heure_jour=date('H:i:s');
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO message (message,ID_sujet,pseudo,date,heure) VALUES (:message,:id,:pseudo,:date,:heure)');
    $req->execute(array(
      'message'=>$_POST['discussion'],
      'id'=>$_POST['id'],
      'pseudo'=>$_SESSION['pseudo'],
      'date'=>$date_jour,
      'heure'=>$heure_jour
    ));
}

//function count_sujets(){
//  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
//  $req = $bdd->query("SELECT max(ID_sujet) FROM sujet");
  //return $req;
//}

function ajouter_sujet(){
$bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
$req=$bdd->prepare('INSERT INTO sujet (sujet,pseudo) VALUES (:sujet,:pseudo)');
$req->execute(array(
  'sujet'=>$_POST['sujet'],
  'pseudo'=>$_SESSION['pseudo']
));
}


function count_sujets(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req = $bdd->query("SELECT max(ID_sujet) FROM sujet");
}

function recup_message($id){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT message,pseudo,date,heure FROM message WHERE ID_sujet=?');
  $req->execute(array($id));
  return $req;
}

function supprimer_sujet($sujet,$id){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req2=$bdd->prepare('DELETE FROM message WHERE ID_sujet=?');
  $req2->execute(array($id));
  $req=$bdd->prepare('DELETE FROM sujet WHERE sujet=?');
  $req->execute(array($sujet));
}


function afficher_message(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $donnees=$bdd->query("SELECT ID_sujet FROM sujet");
    if ($_POST['ID_sujet']<>"")
    $req=$bdd->query("SELECT message FROM message WHERE ID_sujet=$donnees");
  }


function supp_message($message){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('DELETE FROM message WHERE message=?');
  $req->execute(array($message));
}

?>
