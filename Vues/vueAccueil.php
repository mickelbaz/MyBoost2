
<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MyBoost - Le Site Web</title>
  </head>
  <body>


<link rel="stylesheet" type="text/css" href="Contenu/accueil.css">

<div id="bloc_page">
  <!--<p>
    Bienvenue sur le site MyBoost !
  </p>-->
  <br></br>
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


</section>
</div>

</body>
</html>
<?php require 'Vues/footer.php'; ?>
