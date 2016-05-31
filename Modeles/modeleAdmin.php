<?php

function membres_admin(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT pseudo,mail FROM sportif WHERE pseudo!=? ORDER BY pseudo ASC');
  $req->execute(array($_SESSION['pseudo']));
  return $req;
}

function groupes_admin(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->query('SELECT nom,description,region FROM groupe');
  return $req;
}

function supprimer_personne_bdd($pseudo){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM sportif WHERE pseudo=?');
    $req->execute(array($pseudo));
    $req2=$bdd->prepare('DELETE FROM groupe WHERE pseudo_createur=?');
    $req2->execute(array($pseudo));
    $req3=$bdd->prepare('DELETE FROM participe WHERE pseudo=?');
    $req3->execute(array($pseudo));
    $req4=$bdd->prepare('DELETE FROM rejoindre WHERE pseudo=?');
    $req4->execute(array($pseudo));
    $req5=$bdd->prepare('DELETE FROM commentaire WHERE pseudo=?');
    $req5->execute(array($pseudo));
    $req6=$bdd->prepare('DELETE FROM invitation WHERE qui_invite=?');
    $req6->execute(array($pseudo));
}

function membre_banni($pseudo,$mail){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO bannir (pseudo,mail) VALUES (:pseudo,:mail)');
    $req->execute(array('pseudo'=>$pseudo,'mail'=>$mail));
}

function supp_club($club){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM salle WHERE nom=?');
    $req->execute(array($club));
    $req2=$bdd->prepare('DELETE FROM participe WHERE nom_evenement IN (SELECT nom FROM évènement WHERE lieu=?)');
    $req2->execute(array($club));
    $req3=$bdd->prepare('DELETE FROM évènement WHERE lieu=?');
    $req3->execute(array($club));
}

function supp_commentaire($commentaire){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('DELETE FROM commentaire WHERE commentaire=?');
    $req->execute(array($commentaire));
}

<<<<<<< HEAD
function add_commentaire($commentaire){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('INSERT INTO commentaire WHERE commentaire=?');
    $req->execute(array($commentaire));
=======
function recup_faq(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->query('SELECT id,question,reponse FROM faq');
  return $req;
}

function recup_faq_id($id){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('SELECT id,question,reponse FROM faq WHERE id=?');
  $req->execute(array($id));
  return $req;
}

function modif_faq(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('UPDATE faq SET question=?, reponse=? WHERE id=?');
    $req->execute(array($_POST['question'],$_POST['reponse'],$_GET['id']));
}

function ajouter_faq(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO faq (question,reponse) VALUES(:question,:reponse)');
  $req->execute(array(
    'question'=>$_POST['question'],
    'reponse'=>$_POST['reponse']
  ));
}

function supp_faq($id){
  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('DELETE FROM faq WHERE id=?');
  $req->execute(array($id));
>>>>>>> cf992fc47b46273ec22bc1e94f60e36139c4f75e
}


?>
