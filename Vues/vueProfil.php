<?php require "Vues/header.php"; ?>


    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>


    <div class="content">

    <div class="top">
      <div class="avatar">
        <img id="avatar" src="Images/Man_Silhouette.png"/>
      </div>
      <h1>  <?php echo $_SESSION['pseudo'] ?> <br><a href="index.php?page=modif"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Modifier mon compte</span></a></h1>
    </div>
    <div class="info">
      <table class="infoperso" style="border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid black;">
                    <th id="title" colspan="2">Informations</th>
                </tr>
            </thead>

            <tbody>
              <tr style="border-bottom:1px solid black;">
                  <td style="padding:1em;">Nom</td>
                  <td><?php echo $a[0] ?></td>
              </tr>
              <tr style="border-bottom:1px solid black;">
                  <td style="padding:1em;">Prénom</td>
                  <td><?php echo $a[1] ?></td>
              </tr>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Date de naissance</td>
                    <td><?php echo $a[4] ?></td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Sexe</td>
                    <td><?php echo $a[9] ?></td>
                </tr>

            </tbody>
        </table>

        <table class="coordonnees" style="border-collapse:collapse;">

          <thead>
              <tr style="border-bottom:1px solid black;">
                  <th id="title" colspan="2">Coordonnées</th>
              </tr>
          </thead>

          <tbody>
            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Adresse e-mail</td>
                <td><?php echo $a[2] ?></td>
            </tr>

            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Téléphone</td>
                <td><?php echo $a[5] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Adresse</td>
                <td><?php echo $a[3] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Code Postal</td>
                <td><?php echo $a[8] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Ville</td>
                <td><?php echo $a[6] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Région</td>
                <td><?php echo $a[11] ?></td>
            </tr>
            <tr style="border-bottom:1px solid black;">
                <td style="padding:1em;">Pays</td>
                <td><?php echo $a[7] ?></td>
            </tr>

          </tbody>

        </table>

    </div>


    <div class="detail">

      <div class="category">

        <div class="title_category">
          <h4>Mes sports</h4>
        </div>
      <div class="images">
        <?php
        for ($i=0; $i<count($c); $i++){?>
          <div class=groupe><?php echo $c[$i][0]; ?></div>
          <?php
        }?>

        </div>

      </div>

      <div class="category">

        <div class="title_category">
          <h4>Mes groupes</h4>
        </div>

        <div class="images">

              <div class=groupe>

              <table>
                <tr>Gérés en tant qu'administrateur :</tr>
                <?php
                for ($i=0; $i<count($b); $i++){?>
                <tr>
                <td><a href="index.php?page=groupe&groupe=<?php echo $b[$i][0] ?>"><?php echo $b[$i][0]; ?></a></td>
                <td><a href="index.php?page=supprimer&supprimer=<?php echo $b[$i][0] ?>"><INPUT type="button" name="supprimer" value="Supprimer le groupe"/></a></td>
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
            <td><a href="index.php?page=quitter&quitter=<?php echo $d[$i][0] ?>"><INPUT type="button" name="quitter" value="Quitter le groupe"/></a></td>
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
</div>
<br>
<div class="evenement">
<div class="category">

  <div class="title_category">
    <h4>Mes évènements</h4>
  </div>

  <div class="images">

        <div class=groupe>


          <?php foreach($event as list($nom,$description, $date, $heure,$place,$groupe)){ ?>
            <div class=liste><?php echo $nom ?>&nbsp organisé par le groupe <?php echo $groupe?>&nbsp le <?php echo $date ?>&nbsp à <?php echo $heure ?> </div>
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
</div>


<br></br>

<?php require "Vues/footer.php"; ?>
