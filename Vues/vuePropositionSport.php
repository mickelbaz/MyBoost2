<?php require 'Vues/header.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Contenu/formulaire.css" >
    <title>Proposer un sport</title>
  </head>
  <body>


<div class="content">



<div class="formulaire">

        <FORM name="formulaire" method="post" action="">
          <div id="title">
            <p>PROPOSER UN SPORT</p>
          </div>
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
        <tr colspan="2">

        </tr>
      </table>
<br>
    <a><INPUT class="boutonvalider" type="submit" name='envoyer' value="Valider" style="width:10em; "/></a>

    </div>
  <br>
</div>
  </body>
</html>
<?php
    require "Vues/footer.php";
?>
