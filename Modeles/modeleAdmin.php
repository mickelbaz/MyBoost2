<?php


$bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', 'root', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
function afficher_liste_membres(){
  $req=@mysql_query('SELECT * FROM sportif');
  while ($donnees = mysql_fetch_array($req=1)){
    echo $donnees["pseudo"];
    echo $donnees["prenom"];
}
}

?>
