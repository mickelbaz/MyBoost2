<?php require "Vues/header.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="Contenu/FAQ.css"/>
    <title>FAQ</title>
  </head>


    <body>

          	<h1>FAQ</h1>
          	<h4>
                Si vous ne trouvez pas de réponses adaptées, vous pouvez jetter un coup d'oeil au Forum.<br />
                Pour toutes autres questions n'hésitez pas à nous envoyer un mail à l'adresse suivante: "serviceclientmyboost@gmail.com"!
            </h4>

          	<div class='questions'>
				<dl>

          <?php foreach($texte as list($id,$question,$reponse)){?>
					<dt><?php echo $question?></dt><br />
						<dd><?php echo $reponse ?></dd>
            <br>
            <?php if($_SESSION['pseudo']=='admin'){?>
                <div class="modif">
                <a href="index.php?page=modifier_faq&id=<?php echo $id?>"><INPUT type="button" name="modif" value="Modifier"/></a>
                <a href="#" onclick="if (confirm('Supprimer ?')) window.location='index.php?page=supprimer_faq&id=<?php echo $id ?>'; return false"><INPUT type="button" name="supp" value="Supprimer cette rubrique"/></a>
                <br></br><br></br>
            <?php
            } ?>
            <?php
          }?>

				</dl>
        <?php if($_SESSION['pseudo']=='admin'){?>
          <form name="ajout_faq" method="post" action="">
          <p><b>Compléter l'aide en ligne :</b></p>
          <table>
          <tr><td>Question :</td>
          <td><INPUT type="text" name="question" size="98"></td>
          <tr><td>Réponse :</td><td><textarea name ="reponse" rows="7" cols="100"></textarea>
          </table>
          <div class="valider"><INPUT type="submit" name='ajouter' value="Valider"/></div>
        </form>
        <?php
      }?>

			</div>

      <br></br>
		</body>

  <?php require 'Vues/footer.php' ?>
