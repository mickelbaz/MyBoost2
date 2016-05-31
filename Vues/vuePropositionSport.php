<<<<<<< HEAD
<?php require '../Vues/header.php'; ?>

<link rel="stylesheet" href="../Contenu/sports.css" >
<link rel="stylesheet" href="../Contenu/PropositionSport.css" >


            <div class="top"><p>PROPOSER UN SPORT</p>
                </div>

            <div>
              <center>
              <form action="#" method="post" >

                <label id="proposer" for="email">Nom du sport :</label>
                <input id="proposer" type="text" name="nom" size="20" maxlength="40" id="nom" />

                <label id="proposer" for="description">Description du sport :</label>
                <textarea id="proposer" name="description" id="description" cols="20" rows="4"></textarea>

                <br>
                <br>
                <p align="left">
                Ajouter un logo pour ce sport (<img src="../Images/warning.png"> en PNG) :
                <input type="file" name="logo" id="logo" />
                <br>
                </p>

                <br>
               <p>
               <input type="submit" value="Envoyer" />
               <input type="reset" value="Annuler" />
               </p>

              </form>
            </center>
            </div>



<?php require "../Vues/footer.php"; ?>
=======
<?php
    require 'Vues/header.php';?>
    <meta charset="utf-8" />
    <title>MyBoost - Le Site Web</title>
    <link rel="stylesheet" type="text/css" href="/MyBoost2/Contenu/headerFooter.css">
    <link rel="stylesheet" href="Contenu/formulaire.css" >

<div class="formulaire">
      <div id="title">
        <p>PROPOSER UN SPORT</p>
      </div>

        <FORM name="formulaire" method="post" action="">
      	<table>
      	<tr>
      	<td>Nom du sport :</td>
      	<td><INPUT type="text" name="nomSport"></td>
      	</tr>
      	<tr>
      	<td>Description du sport :</td>
      	<td><textarea name="description"rows="4" cols="45"></textarea></td>
      	</tr>
        <tr>
      	<td>Type de sport :</td>
      	<td>
          <form method="post" action="traitement.php">
             <p>
                 Cochez le type de sport :<br />
                 <input type="radio" name="type_de_sport"  value="aquatique" id="sport_aquatique" /> <label for="aquatique">Sport aquatique</label><br />
                 <input type="radio" name="type_de_sport"  value="ballon" id="sport_de_ballon" /> <label for="sport de ballon">Sport de ballon</label><br />
                 <input type="radio" name="type_de_sport"  value="raquette" id="sport_de_raquette" /> <label for="sport de raquette">Sport de raquette</label><br />
                 <input type="radio" name="type_de_sport"  value="nature" id="sport_de_nature" /> <label for="sport de raquettes">Sport de nature</label><br/>
                 <input type="radio" name="type_de_sport"  value="combat" id="sport_de_combat" /> <label for="sport de combat">Sport de combat</label>
             </p>
          </form>

        </td>
      	</tr>
      </table>
<br>
    <a><INPUT class="boutonvalider" type="submit" name='envoyer' value="Valider" style="width:10em"/></a>

    </div>
    <br><br><br><br><br><br>
<?php
    require "Vues/footer.php";
?>
>>>>>>> 0ba72b780ce09b0f054b02faa44362fc3aa8518d
