<?php if(isset($_SESSION['pseudo'])){?>
<table>
<tr>Les derniers groupes dans votre région !</tr>
<tr></tr><tr></tr>
<?php for($i=count($groupe)-1;0<=$i;$i--){?>
      <tr>
      <td> <?php echo $groupe[$i][0] ?></td>
      <td><a href="index.php?page=groupevoir&groupe=<?php echo $groupe[$i][0] ?>"><INPUT type="button" name="voir" value="Voir la page"/></a></td>
    </tr>
  <?php
}
if(count($groupe)==0){?>
  <br></br>
  <tr><em>Aucun nouveau groupe</em></tr>
  <?php
}?>
</table>
<?php
}?>
<br></br>
</div>
