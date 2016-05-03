<?php require "../Vues/header.php"; ?>

    <link type="text/css" rel="stylesheet" href="../Contenu/profil.css"/>

    <div class="content">
    <div class="avatar">
      <img id="avatar" src="../Images/Man_Silhouette.png"/>
    </div>

    <div class="top">
      <h1>PRÉNOM NOM, <span>Ville</span><br><a href="vue/Profil/Modif_compte.php"><img id="logomodif" class="modifier" src="Images/modif.png"/><span class="modifier"> Modifier mon compte</span></a></h1>

    </div>


    <div class="info">
      <table style="border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid black;">
                    <th id="title" colspan="2">Informations</th>
                </tr>

            </thead>

            <tbody>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Âge</td>
                    <td>20 ans</td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Sexe</td>
                    <td>Homme</td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Adresse e-mail</td>
                    <td>machin@myboost.fr</td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Téléphone</td>
                    <td>06 00 00 00 00</td>
                </tr>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Adresse</td>
                    <td>Blabla</td>
                </tr>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Code Postal</td>
                    <td>75 000</td>
                </tr>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Ville</td>
                    <td>Lala</td>
                </tr>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Pays</td>
                    <td>Lala</td>
                </tr>

            </tbody>
        </table>

    </div>


    <div id="detail">

      <div class="category">

        <div class="head_category">
          <h4>Mes sports</h4>
        </div>

        <div class="images">
          <img id="sportimg" src="Images/clipart_boxe.png"/>
          <img id="sportimg" src="Images/clipart_football.png"/>
          <img id="sportimg" src="Images/clipart_tennis.png"/>
          <img id="sportimg" src="Images/clipart_jogging.png"/>
          <img id="sportimg" src="Images/clipart_petanque.png"/>
          <img id="sportimg" src="Images/clipart_curling.png"/>
          <img id="sportimg" src="Images/clipart_basket.png"/>
          <img id="sportimg" src="Images/clipart_golf.png"/>
          <img id="sportimg" src="Images/clipart_trampoline.png"/>
          <img id="sportimg" src="Images/clipart_muscu.png"/>
        </div>

      </div>

      <div class="category">

        <div class="head_category">
          <h4>Mes groupes</h4>
        </div>

        <div class="images">
        <img id="sportimg" src="Images/avatar1.png"/>
        <img id="sportimg" src="Images/avatar2.png"/>
        <img id="sportimg" src="Images/avatar3.png"/>
        <img id="sportimg" src="Images/avatar4.png"/>
        </div>

      </div>
    </div>

</div>

<?php require "../Vues/footer.php"; ?>
