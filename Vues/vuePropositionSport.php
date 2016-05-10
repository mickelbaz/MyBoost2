<?php
    require '../Vues/header.php';?>

    <div class="top"> <p>PROPOSER UN SPORT</p>
        </div>
        <FORM name="formulaire" method="post" action="../Vues/proposport.php">
      	<table>
      	<tr>
      	<td>Nom du sport :</td>
      	<td><INPUT type="text" name="nomSport"></td>
      	</tr>
      	<tr>
      	<td>Description du sport :</td>
      	<td><INPUT type="text" name="descriptionSport"> </td>
      	</tr>
      </table>
<br>
    <INPUT type="submit" name='envoyer' value="Valider" />
<?php
    require "../Vues/footer.php";
?>
