<?php require "Vues/header.php"; ?>


    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>

    <div class="content">

    <div class="top">
      <div class="avatar">
        <img id="avatar" src="Images/user.png"/>
      </div>
      <h1>  <?php echo $a[10] ?> <br></h1>
    </div>
    <div class="info">
      <table class="infoperso" style="border-collapse:collapse;">
            <thead>
              <tr>
                <th>
                  <img src="Images/list.png" style="margin-left:13em; margin-bottom:1em;" />
                </th>
              </tr>
                <tr style="border-bottom:1px solid black;">
                    <th id="title" colspan="2">INFORMATIONS</th>
                </tr>
            </thead>

            <tbody>
                <tr style="border-bottom:1px solid black;">
                    <td class="info_left" style="padding:1em;">Date de naissance</td>
                    <td class="info_right"><?php echo $a[4] ?></td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td class="info_left" style="padding:1em;">Sexe</td>
                    <td class="info_right"><?php echo $a[9] ?></td>
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
        }
        if(count($c)==0){?>
          <tr><td>Aucun sport</td></tr>
            <?php
        }
        ?>

        </div>

      </div>

      <div class="category">

        <div class="title_category">
          <h4>Mes groupes</h4>
        </div>

        <div class="detail_category">

              <div class=groupe>

              <table>
                <tr>Gérés en tant qu'administrateur :</tr>
                <?php
                for ($i=0; $i<count($b); $i++){?>
                <tr>
                <td><a href="index.php?page=groupe&groupe=<?php echo $b[$i][0] ?>"><?php echo $b[$i][0]; ?></a></td>
              <?php
            }
            if(count($b)==0){?>
              <tr><td>Aucun groupe géré</td></tr>
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
            <td><a href="index.php?page=groupe&groupe=<?php echo $d[$i][0]?>"><?php echo $d[$i][0]; ?></td>
          <?php
         }
         if(count($d)==0){?>
           <tr><td>Aucun groupe </td></tr>
             <?php
         }
         ?>
          </table>
          </div>

      </div>
    </div>
</div>
<br>
<div class="title_category_evenement">
  <h4>Mes événements</h4>
</div>

<div class="evenement">

    <?php foreach($event as list($nom,$description, $date, $heure,$place,$groupe,$lieu)){ ?>
      <div class=liste><?php echo $nom ?>&nbsp organisé par le groupe <?php echo $groupe?>&nbsp le <?php echo $date ?>&nbsp à <?php echo $heure ?> &nbsp à &nbsp <?php echo $lieu ?> &nbsp</div>
    <?php
      }
      if(count($event)==0){?>
        <tr><td>Aucun événement</td></tr>
          <?php
      }
      ?>

</div>


<br></br>

<?php require "Vues/footer.php"; ?>
