<?php  function recup_sujet(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req = $bdd->query("SELECT * FROM sujet");
    while($donnees=$req->fetch()){
      echo $donnees['ID_sujet'];
    }
    return $req;
}
function ajouterMessage(){


}

function count_sujets(){
  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req = $bdd->query("SELECT max(ID_sujet) FROM sujet");
  return $req;
}

function ajouter_sujet(){


}

function afficher_message(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp_root', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $donnees=$bdd->query("SELECT ID_sujet FROM sujet");
    if ($_POST['ID_sujet']<>"")
    $req=$bdd->query("SELECT message FROM message WHERE ID_sujet=$donnees");

}

?>
