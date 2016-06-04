<?php require 'Vues/header.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/admin.css">
    <title>Administration</title>
  </head>
  <body>

  <div class="image">
    <img src="Images/admin.png" alt="" />
  </div>

          	<h1> Bienvenue dans l'espace administrateur </h1>

          	<div class=categorie>
          		<table>
            		<tr>
                		<h4>
                        <a href="index.php?page=afficher_membres_admin">Gérer les membres inscrits</a>
                    </h4>

            		</tr>
        		</table>
   	 		</div>

   	 		<div class=categorie>
          	<table>
            		<tr>
                    <h4>
                        <a href="index.php?page=afficher_groupes_admin" >Gérer les groupes	</a>
                    </h4>
            		</tr>
        		</table>
   	 		</div>

        <div class=categorie>
          	<table>
            		<tr>
                    <h4>
                        <a href="index.php?page=afficher_clubs_admin" >Gérer les clubs	</a>
                    </h4>
            		</tr>
        		</table>
   	 		</div>

   	 		<div class=categorie>
          		<table>
            		<tr>
                    <h4>
                      <a href=".php" >Gérer les messages du forum</a>
                    </h4>
            		</tr>
        		</table>
   	 		</div>

   	 		<div class=categorie>
          		<table>
            		<tr>
                    <h4>
                        <a href="index.php?page=faq" >Gérer la rubrique FAQ</a>
                    </h4>
            		</tr>
        		</table>

   	 		</div>
        <br>


<br></br>

</body>
</html>
<?php require 'Vues/footer.php' ?>
