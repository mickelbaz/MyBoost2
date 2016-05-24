
<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/accueil.css">
    <title>MyBoost - Le Site Web</title>
  </head>
  <body>

<div class="bloc_page">

  <div class="title_accueil">
      <h1>LE SPORT N'ATTEND QUE VOUS !</h1>
  </div>

  <?php if(isset($_SESSION['pseudo'])){?>

<div class="contenu">


  <div class="category">

  <div class="title_category_larger">
    <h3>Les derniers groupes dans votre région</h3>
  </div>

  <div class="category_content">
    <table>
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
  </div>

</div>
  <br></br>
  <div class="category">


  <div class="title_category">
    <h3>Vos invitations</h3>
  </div>

  <div class="category_content">


  <table>
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

  </div>

  </div>
  </div>
  <?php
  }?>




</div>

<div class="presentation">


</div>


<!--
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

</section>
</div>
-->
</body>
</html>
<?php require 'Vues/footer.php'; ?>
