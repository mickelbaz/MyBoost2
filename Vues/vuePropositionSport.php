<?php
    require '../Vues/header.php';?>

    <div class="top"> <p>PROPOSER UN SPORT</p>
        </div>
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
      </table>
<?php
    require "../Vues/footer.php";
?>
