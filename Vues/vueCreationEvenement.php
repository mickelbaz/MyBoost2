<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Contenu/formulaire.css">
		<title>Création d'un événement</title>
	</head>
	<body>

		<div class="content">


		<div class="formulaire">

<FORM name="formulaire" method="post" action="">

	<p id="title">CRÉATION D'UN ÉVÉNEMENT</p>
	<table>

	<tr>
	<td>Nom de l'événement : </td>
	<td><INPUT type="text" name="nom" value="<?php if(isset($_POST['nom'])){ echo htmlentities($_POST['nom']);}?>"/></td>
	</tr>

  <tr>
  <td>Description : </td>
  <td><textarea name="description" rows="4" cols="45"></textarea></td>
  </tr>
	<tr><td>Lieu : </td>
	<td>
	<SELECT name="lieu">
		<OPTION value="title" selected>Choisir le club
		<?php for($i=0;$i<count($salle);$i++){?>
			<OPTION> <?php echo $salle[$i][0];
		}?>
	</SELECT>
	</td>
	<tr>
	<td>Date : </td>
	<td>
			<SELECT name="jour">
				<OPTION value="title" selected>Jour
				<?php for($jour=1; $jour<=31; $jour++):
					if($jour<10){?>
						<option value="<?php echo '0'; echo $jour?>" <?php if(isset($_POST['jour']) && $_POST["jour"]=="0$jour"){?> selected <?php }?>/><?php echo '0'; echo $jour;
					}
					else{?>
						<option value="<?php echo $jour?>" <?php if(isset($_POST['jour']) && $_POST["jour"]=="$jour"){?> selected <?php }?>><?php echo $jour;
					}
					endfor;?>
			</SELECT>

		<SELECT name="mois">
			<OPTION value="title" selected>Mois
			<?php for($mois=1; $mois<=12; $mois++):
				if($mois<10){?>
					<option value="<?php echo '0'; echo $mois?>" <?php if(isset($_POST['mois']) && $_POST["mois"]=="0$mois"){?> selected <?php }?>><?php echo '0'; echo $mois;
				}
				else{?>
					<option value="<?php echo $mois?>" <?php if(isset($_POST['mois']) && $_POST["mois"]=="$mois"){?> selected <?php }?>><?php echo $mois;
				}
				endfor ;?>
		</SELECT>

			<SELECT name="annee">
				<OPTION value="title" selected>Année
				<?php for($annee=2020; $annee>=2016; $annee--):?>
				<option value="<?php echo $annee?>" <?php if(isset($_POST['annee']) && $_POST["annee"]=="$annee"){?> selected <?php }?>><?php echo $annee;
				endfor ;?>
			</SELECT>
	</td>
	</tr>

  <tr>
	<td>Heure :</td>
  <td>
      <SELECT name="heure">
        <OPTION value="title" selected>Heure
        <?php for($heure=0; $heure<=23; $heure++):
          if($heure<10){?>
            <option value="<?php echo '0'; echo $heure?>" <?php if(isset($_POST['heure']) && $_POST["heure"]=="0$heure"){?> selected <?php }?>/><?php echo '0'; echo $heure;
          }
          else{?>
            <option value="<?php echo $heure?>" <?php if(isset($_POST['heure']) && $_POST["heure"]=="$heure"){?> selected <?php }?>><?php echo $heure;
          }
          endfor;?>
      </SELECT>

    <SELECT name="minute">
      <OPTION value="title" selected>Minutes
      <?php for($minute=0; $minute<=59; $minute++):
        if($minute<10){?>
          <option value="<?php echo '0'; echo $minute?>" <?php if(isset($_POST['minute']) && $_POST["minute"]=="0$minute"){?> selected <?php }?>><?php echo '0'; echo $minute;
        }
        else{?>
          <option value="<?php echo $minute?>" <?php if(isset($_POST['minute']) && $_POST["minute"]=="$minute"){?> selected <?php }?>><?php echo $minute;
        }
        endfor ;?>
    </SELECT>
    </td>

		<tr>
		<td>Nombre de participants maximum : </td>
		<td><INPUT type="text" size="5" name="nb" value="<?php if(isset($_POST['nb'])){ echo htmlentities($_POST['nb']);}?>"/></td>
		</tr>

  </table>


	<div class="C"><INPUT type="submit" name="envoyer" value="Valider"/></div>
	</FORM>
</div>
	<br></br>
</div>
</body>
</html>
  <?php require 'Vues/footer.php'; ?>
