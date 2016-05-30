
<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/accueil.css">
    <title>MyBoost - Le Site Web</title>
  </head>
  <body>


  <div class="title_accueil">
      <h1>LE SPORT N'ATTEND QUE VOUS, <?php echo $_SESSION['pseudo'] ?> !</h1>
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
        <td><a href="#" onclick="if (confirm('Ignorer l'invitation ?')) window.location='index.php?page=ignorer&groupe=<?php echo $nom_groupe?>'; return false"><INPUT type="button" name="ignorer" value="Ignorer l'invitation"/></a></td>
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

  <br></br>
  <div class="category">


  <div class="title_category">
    <h3>Vos notifications</h3>
  </div>

  <div class="category_content">


  <table>
    <?php
    $nombre=array();
    $nb_place=array();
    $dispo=array();
    if(count($liste_groupe)==0){?>
      <tr><em>Aucune notification</em></tr>
      <?php
    }
    for($i=0;$i<count($liste_groupe);$i++){
      $nombre[$i]=count(recupmembre($liste_groupe[$i][0]));
      $nb_place[$i]=recup_place($liste_groupe[$i][0]);
      $dispo[$i]=$nb_place[$i][0] - $nombre[$i];
        if($dispo[$i]!=0){?>
      <tr>
        <td>Place disponible dans le groupe <?php echo $liste_groupe[$i][0] ?> </td>
        <td><a href="index.php?page=groupevoir&groupe=<?php echo $liste_groupe[$i][0] ?>"><INPUT type="button" name="voir" value="Voir la page du groupe"/></a></td>
        <td><a href="#" onclick="if (confirm('Ignorer ?')) window.location='index.php?page=ignorer_notif&groupe=<?php echo $liste_groupe[$i][0] ?>'; return false"><INPUT type="button" name="ignorer_notif" value="Ignorer"/></a></td>
      </tr>
    <?php
    }
    if($dispo[$i]==0){?>
      <tr><em>Aucune notification</em></tr>
      <?php
    }
  }?>
  </table>
  <br></br>

  </div>

  </div>
  </div>
  <?php
  }

  else {?>
    <div class="presentation">

      <div class="bougez">

        <img src="Images/runer.png"/>
        <h2>BOUGEZ</h2>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac risus quis sapien vehicula varius sit amet id tellus. Nulla facilisi. Phasellus nec suscipit felis. Donec neque leo, convallis vel.
            </p>
          </div>

      </div>

      <div class="rencontrez">

        <img src="Images/group.png"/>
        <h2>RENCONTREZ</h2>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac risus quis sapien vehicula varius sit amet id tellus. Nulla facilisi. Phasellus nec suscipit felis. Donec neque leo, convallis vel.
            </p>
          </div>

      </div>

      <div class="planifiez">

        <img src="Images/calendar.png"/>
        <h2>PLANIFIEZ</h2>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac risus quis sapien vehicula varius sit amet id tellus. Nulla facilisi. Phasellus nec suscipit felis. Donec neque leo, convallis vel.
            </p>
          </div>

      </div>

    </div>
  <?php } ?>






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
