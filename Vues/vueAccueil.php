
<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" type="text/css" href="Contenu/accueil.css">

<div id="bloc_page">

  <br></br>
  <?php if(isset($_SESSION['pseudo'])){?>
  <table>
  <tr>Les derniers groupes dans votre région :</tr>
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
  <br></br><br></br>
  <table>
  <tr>Vos invitations : </tr>
  <?php foreach($invitation as list($nom_groupe,$qui_invite)){?>
      <tr>
        <td> Invitation au groupe <?php echo $nom_groupe ?> par <?php echo $qui_invite ?> </td>
        <td><a href="index.php?page=groupevoir&groupe=<?php echo $nom_groupe ?>"><INPUT type="button" name="voir" value="Voir la page du groupe"/></a></td>
        <td><a href="index.php?page=ignorer&groupe=<?php echo $nom_groupe?>"><INPUT type="button" name="ignorer" value="Ignorer l'invitation"/></a></td>
      </tr>
    <?php
  }
  if(count($invitation)==0){?>
    <br></br>
    <tr><em>Aucune nouvelle invitation</em></tr>
    <?php
  }?>
  </table>
  <?php
  }?>
  <br></br>


</div>


<div class="carrousel">
  <section id="slideshow">
		<div class="container">
				<div class="slider">
					<figure>
						<img src="Images/danse.jpg"alt="" width="1200" height="500" />
						<img src="Images/yoga.jpg"alt="" width="1200" height="500" />
						<img src="Images/running.jpg"alt="" width="1200" height="500" />
						<img src="Images/tennis.jpg"alt="" width="1200" height="500" />
					</figure>
				</div>
		</div>
		<span id="timeline"></span>
</section>
</div>

<?php require 'Vues/footer.php'; ?>
