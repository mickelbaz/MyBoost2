<?php require "../Vues/header.php"; ?>


    <link type="text/css" rel="stylesheet" href="../Contenu/profil.css"/>


    <div class="content">

    <div class="top">
      <div class="avatar">
        <img id="avatar" src="../Images/Man_Silhouette.png"/>
      </div>
      <h1>  <?php echo $_SESSION['pseudo'] ?> <br><a href="../Controleurs/controleurModif_profil.php"><img id="logomodif" class="modifier" src="../Images/modif.png"/><span class="modifier"> Modifier mon compte</span></a></h1>
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



          <!--<img id="sportimg" src="../Images/clipart_boxe.png"/>
          <img id="sportimg" src="../Images/clipart_football.png"/>
          <img id="sportimg" src="../Images/clipart_tennis.png"/>
          <img id="sportimg" src="../Images/clipart_jogging.png"/>
          <img id="sportimg" src="../Images/clipart_petanque.png"/>
          <img id="sportimg" src="../Images/clipart_curling.png"/>
          <img id="sportimg" src="../Images/clipart_basket.png"/>
          <img id="sportimg" src="../Images/clipart_golf.png"/>
          <img id="sportimg" src="../Images/clipart_trampoline.png"/>
          <img id="sportimg" src="../Images/clipart_muscu.png"/>-->
        </div>

      </div>

      <div class="category">

        <div class="title_category">
          <h4>Mes groupes</h4>
        </div>

        <div class="images">
            <?php
            for ($i=0; $i<count($b); $i++){?>
              <div class=groupe><?php echo $b[$i][0]; ?></div>
              <?php
            }
            ?>

      <!--  <img id="sportimg" src="../Images/avatar1.png"/>
        <img id="sportimg" src="../Images/avatar2.png"/>
        <img id="sportimg" src="../Images/avatar3.png"/>
        <img id="sportimg" src="../Images/avatar4.png"/>
      </div>-->

      </div>
    </div>

</div>
<br></br>

<?php require "../Vues/footer.php"; ?>
