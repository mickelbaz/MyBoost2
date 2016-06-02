<?php require "Vues/header.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>
    <title><?php echo $_SESSION['pseudo'] ?></title>
  </head>
  <body>


</html>
    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>


    <div class="content">

    <div class="top">
      <div class="avatar">
        <img id="avatar" src="Images/user.png"/>
      </div>
      <h1>  <?php echo $_SESSION['pseudo'] ?> <br><a href="index.php?page=modif"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Modifier mon compte</span></a></h1>
      <?php if($_SESSION['pseudo']=='admin'){?><img class="star" src="Images/star.png" /> <?php } ?>
    </div>
    <div class="info">
      <table class="infoperso" style="border-collapse:collapse;">
            <thead>
                <tr>
                  <th>
                    <img src="Images/notepad.png" style="margin-left:13em; margin-bottom:1em;" />
                  </th>
                </tr>
                <tr style="border-bottom:1px solid black;">
                    <th id="title" colspan="2">INFORMATIONS</th>
                </tr>
            </thead>

            <tbody>
              <tr style="border-bottom:1px solid black;">
                  <td class="info_left" style="padding:1em;">Nom</td>
                  <td class="info_right"><?php echo $a[0] ?></td>
              </tr>
              <tr style="border-bottom:1px solid black;">
                  <td class="info_left" style="padding:1em;">Prénom</td>
                  <td class="info_right"><?php echo $a[1] ?></td>
              </tr>
                <tr style="border-bottom:1px solid black;">
                    <td class="info_left" style="padding:1em;">Date de naissance</td>
                    <td class="info_right"><?php echo $a[4] ?></td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td class="info_left" style="padding:1em;">Sexe</td>
                    <td class="info_right"><?php echo $a[9] ?></td>
                </tr>

            </tbody>
        </table>

        <table class="coordonnees" style="border-collapse:collapse;">

          <thead>
              <tr>
                <th>
                  <img src="Images/place.png" style="margin-left:13em; margin-bottom:1em;" />
                </th>
              </tr>
              <tr style="border-bottom:1px solid black;">
                  <th id="title" colspan="2">COORDONNÉES</th>
              </tr>
          </thead>

          <tbody>
            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Adresse e-mail</td>
                <td class="info_right"><?php echo $a[2] ?></td>
            </tr>

            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Téléphone</td>
                <td class="info_right"><?php echo $a[5] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Adresse</td>
                <td class="info_right"><?php echo $a[3] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Code Postal</td>
                <td class="info_right"><?php echo $a[8] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Ville</td>
                <td class="info_right"><?php echo $a[6] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Région</td>
                <td class="info_right"><?php echo $a[11] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td class="info_left" style="padding:1em;">Pays</td>
                <td class="info_right"><?php echo $a[7] ?></td>
            </tr>

          </tbody>

        </table>

    </div>


    <div class="detail">

      <div class="category">

        <div class="title_category">
          <h4>Mes sports</h4>
        </div>
      <div class="detail_category">
        <?php
        for ($i=0; $i<count($c); $i++){?>
          <div class=groupe><a href="index.php?page=sport&sport=<?php echo $c[$i][0]?>"><?php echo $c[$i][0]; ?></a></div>
          <?php
        }?>

        </div>

      </div>

      <div class="category">

        <div class="title_category">
          <h4>Mes groupes</h4>
        </div>


        <div class="detail_category">

              <table>
                <tr>Gérés en tant qu'administrateur :</tr>
                <?php
                for ($i=0; $i<count($b); $i++){?>
                <tr>
                <td><a href="index.php?page=groupe&groupe=<?php echo $b[$i][0] ?>"><?php echo $b[$i][0]; ?></a></td>
                <td><a href="#" onclick="if (confirm('Supprimer le groupe ?')) window.location='index.php?page=supprimer&supprimer=<?php echo $b[$i][0] ?>'; return false"><INPUT type="button" name="supprimer" value="Supprimer le groupe"/></a></td>
              <?php
            }
            if(count($b)==0){?>
              <tr><td>Vous ne gérez aucun groupe</td><td><a href="index.php?page=creationGroupe"><INPUT type="button" name="créer" value="Créer un groupe"/></a></td></tr>
                <?php
            }
            ?>

          </table>
          <br></br>
          <table>
            <tr>Autres groupes :</tr>
            <?php
            for ($i=0; $i<count($d); $i++){?>
            <tr>
            <td><a href="index.php?page=groupe&groupe=<?php echo $d[$i][0] ?>"><?php echo $d[$i][0]; ?></a></td>
            <td><a href="#" onclick="if (confirm('Quitter le groupe ?')) window.location='index.php?page=quitter&quitter=<?php echo $d[$i][0] ?>'; return false"><INPUT type="button" name="quitter" value="Quitter le groupe"/></a></td>
          <?php
         }
         if(count($d)==0){?>
           <tr><td><a href="index.php?page=ListeGroupes"><INPUT type="button" name="voir" value="Voir la liste des groupes"/></a></td></tr>
             <?php
         }
         ?>
          </table>
          </div>



    </div>
</div>
<br>
<div class="evenement">

<div>


  <div class="title_category_evenement">
    <h4>Mes événements</h4>
  </div>

  <div class="detail_category">

    <?php foreach($event as list($nom,$description, $date, $heure,$place,$groupe,$lieu)){ ?>
      <div class=liste><?php echo $nom ?>&nbsp organisé par le groupe <?php echo $groupe?>&nbsp le <?php echo $date ?>&nbsp à <?php echo $heure ?> &nbsp à &nbsp <?php echo $lieu ?> &nbsp</div>
    <?php
      }
      if(count($event)==0){?>
        <tr><td>Aucun évènement</td></tr>
          <?php
      }
      ?>
  </div>

</div>

</div>


<br></br>

</div>
  </body>

<?php require "Vues/footer.php"; ?>
