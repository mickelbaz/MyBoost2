<?php
    require 'Vues/header.php';?>
    <link rel="stylesheet" href="Contenu/sports.css" >

    <div class="top"> <p>PROPOSER UN SPORT</p>
        </div>
        <br><br><br><br>
        <FORM name="formulaire" method="post" action="">
      	<table>
      	<tr>
      	<td>Nom du sport :</td>
      	<td><INPUT type="text" name="nomSport"></td>
      	</tr>
      	<tr>
      	<td>Description du sport :</td>
      	<td><INPUT type="text" name="descriptionSport"> </td>
      	</tr>
        <tr>
      	<td>Type de sport :</td>
      	<td>
          <form method="post" action="traitement.php">
             <p>
                 Cochez le type de sport :<br />
                 <input type="radio" name="type_de_sport"  value="sport_aquatique" id="sport_aquatique" /> <label for="aquatique">Sport aquatique</label><br />
                 <input type="radio" name="type_de_sport"  value="sport_en_salle" id="sport_en_salle" /> <label for="sport en salle">Sport en salle</label><br />
                 <input type="radio" name="type_de_sport"  value="sport_en_plein_air" id="sport_en_plein_air" /> <label for="sport en plein air">Sport en plein air</label><br />
                 <input type="radio" name="type_de_sport"  value="sport_de_raquettes" id="sport_de_raquettes" /> <label for="sport de raquettes">Sport de raquettes</label><br/>
                 <input type="radio" name="type_de_sport"  value="art_martial" id="art_martial" /> <label for="art_martial">Arts martiaux</label>
             </p>
          </form>

        </td>
      	</tr>
      </table>
<br>
    <a><INPUT class="boutonvalider" type="submit" name='envoyer' value="Valider" style="width:10em"/></a>
    <br><br><br><br><br><br>
<?php
    require "Vues/footer.php";
?>
