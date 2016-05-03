<?php require'../Vues/vueModif_profil.php';

if (isset($_POST['modif_coordonnees']) && $_POST['modif_coordonnees']<>""){
  header("location: ../Vues/vueModif_coordonnees.php");
}

if (isset($_POST['modif_mail']) && $_POST['modif_mail']<>""){
  header("location: ../Vues/vueModif_mail.php");
}

if (isset($_POST['modif_mdp']) && $_POST['modif_mdp']<>""){
    header("location: ../Vues/vueModif_mdp.php");
}

?>
