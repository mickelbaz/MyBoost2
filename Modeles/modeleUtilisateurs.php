<?php


function ajout(){
  $mdp = sha1($_POST['mot_de_passe']);
  $date="{$_POST["annee"]}-{$_POST["mois"]}-{$_POST["jour"]}";

  $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO sportif (nom,prenom,pseudo,sexe,date,adresse,code_postal,ville,region,pays,tel,mail,mot_de_passe)
VALUES (:nom,:prenom,:pseudo,:sexe,:date,:adresse,:code_postal,:ville,:region,:pays,:tel,:mail,:mot_de_passe)');

   $req->execute(array(
    'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom'],
    'pseudo'=>$_POST['pseudo'],
    'date'=>$date,
    'sexe'=>$_POST['sexe'],
    'adresse'=>$_POST['adresse'],
    'code_postal'=>$_POST['code_postal'],
    'ville'=>$_POST['ville'],
    'region'=>$_POST['region'],
    'pays'=>$_POST['pays'],
    'tel'=>$_POST['tel'],
    'mail'=>$_POST['mail'],
    'mot_de_passe'=>$mdp));
}

function verif_pseudo(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo=?');
    $req->execute(array($_POST['pseudo']));
    $donnee=$req->fetch();
    if($donnee){
      return false;
    }
    else{
      return true;
    }
  }

  function verif_mail(){
      $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT mail FROM sportif WHERE mail=?');
      $req->execute(array($_POST['mail']));
      $donnee=$req->fetch();
      if($donnee){
        return false;
      }
      else{
        return true;
      }
    }

    function verif_id(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        if (isset($_POST['connection']) && $_POST['connection']=="Valider"){
          $mdp=sha1($_POST['mot_de_passe']);
          $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo = :pseudo AND mot_de_passe = :mdp');
          $req->execute(array(
            'pseudo'=> $_POST['pseudo'],
            'mdp'=>$mdp));
          return $req;
        }

      }



      function recup_infos($pseudo){
          $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
          $req=$bdd->prepare('SELECT nom,prenom,mail,adresse,date,tel,ville,pays,code_postal,sexe,pseudo,region FROM sportif WHERE pseudo=?');
          $req->execute(array($pseudo));
          return $req;
      }

      function verif_existe_mail(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        $req=$bdd->prepare('SELECT mail FROM sportif WHERE pseudo=?');
        $req->execute(array($_SESSION['pseudo']));
        return $req;
      }

      function replace_mail(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        $req=$bdd->prepare('UPDATE sportif SET mail=? WHERE pseudo=?');
        $req->execute (array($_POST['mail_new'],$_SESSION['pseudo']));
      }

      function verif_existe_mdp(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        $req=$bdd->prepare('SELECT mot_de_passe FROM sportif WHERE pseudo=?');
        $req->execute(array($_SESSION['pseudo']));
        return $req;
      }

      function replace_mdp(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        $req=$bdd->prepare('UPDATE sportif SET mot_de_passe=? WHERE pseudo=?');
        $req->execute (array(sha1($_POST['mdp_new']),$_SESSION['pseudo']));
      }

      function replace_coordonnees(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        $req=$bdd->prepare('UPDATE sportif SET adresse=?, code_postal=?, ville=?,pays=?, region=?,tel=? WHERE pseudo=?');
        $req->execute (array($_POST['adresse'],$_POST['cp'],$_POST['ville'],$_POST['pays'],$_POST['region'],$_POST['tel'],$_SESSION['pseudo']));
      }

      function annuaire(){
          $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
          $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo !=? ORDER BY pseudo ASC');
          $req->execute(array($_SESSION['pseudo']));
          return $req;
        }

      function verif_bannir(){
        $bdd=new PDO('mysql:host=localhost; dbname=myboostp_myboost; charset=utf8', 'myboostp', 'appG6D', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        $req=$bdd->prepare('SELECT mail FROM bannir WHERE mail=?');
        $req->execute(array($_POST['mail']));
        $donnee=$req->fetch();
        if($donnee){
          return true;
        }
        else{
          return false;
        }
      }


?>
