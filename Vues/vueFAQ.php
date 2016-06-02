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
  <dt>Je n'arrive pas à me connecter sur le site?</dt><br />
    <dd>Pour réussir à se connecter il faut tout d'abord avoir rempli le formulaire d'insciption de notre site.<br />
      Au terme de l'inscription un e-mail vous a été envoyé pour valider votre inscription sur l'adresse mail que vous nous aurez fourni.<br /><br>
    </dd>

  <dt>J'aimerai changer ma photo de profil?</dt><br />
    <dd>Rien de plus simple! <br />
      Vous devez vous rendre sur votre profil après vous être connecté et cliquer sur "Mon compte" puis sur "ajouter une photo de profil".<br />
      Vous pourrez alors importer une nouvelle photo</dd></br>

  <dt>Est-ce possible de changer son mot de passe?</dt><br />
    <dd>Bien évidement il vous est possible de modifier votre mot de passe.<br />
      Il suffit de vous rendre sur votre page profil après vous être connecté.<br />
      Ensuite vous devez cliquer sur "Mon compte" puis sur "modifier mon profil".<br />
      Ainsi vous pourrez effectuer votre changement de mot de passe.<br />
    </dd><br>

  <dt>Comment rejoindre un groupe de sport?</dt><br />
  <dd>Sur la page d'accueil s'affiche les derniers groupes créés dans votre région. Vous pouvez visualisez la page et si le groupe vous intéresse il suffit de cliquer sur "Rejoindre le groupe".<br/>
      Dans l'onglet "Communauté" vous avez accès à la liste de tous les groupes et ainsi rejoindre celui de votre choix.<br>
      Toujours dans cet onglet "Communauté", vous pouvez trouver la liste des sports et choisir lequel vous convient. Une liste des groupes proposant le sport choisi sera affichée.<br />
      Utilisez la barre de recherche pour une demande précise sur le groupe.<br>
  </dd><br>

  <dt>Comment créer un groupe ?</dt><br />
  <dd>Dans l'onglet "Communauté" vous avez accès à la page  "Créer un groupe". Remplissez le formulaire.<br>
    Vous serez alors administrateur de ce groupe. Vous aurez alors quelques privilèges : Annuler les évènements, supprimer des membres, modifier ou supprimer le groupe.<br>
    Vous pourrez également inviter un membre au groupe. Pour cela, rendez vous sur la page annuaire et sélectionnez le membre que vous voulez inviter.<br>
    Si vous voulez quitter le groupe, choisissez un nouvel administrateur<br />
  </dd><br>

    <dt>Comment ajouter un club ?</dt><br />
    <dd>Dans l'onglet "Communauté" puis "Liste des clubs" vous avez la possibilité d'ajouter un club. Il suffit de remplir le formulaire donné.<br>
      Sur la page des clubs, vous pourrez le commenter et le noter<br>
    </dd><br>

</dl>
</div>


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
