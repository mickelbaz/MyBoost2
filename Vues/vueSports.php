<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Contenu/sports.css" >
    <title>Liste des sports</title>
  </head>
  <body>


  <div class="page">


      <div class="top">
        <h1>SPORTS</h1>
      </div>

      <div class="content">
        <h3>Retrouvez tous nos sports classés par catégories !</h3>


        <div class="sports">
          <div class="sports-aquatiques_title">
            <h2>SPORTS AQUATIQUES</h2>
          </div>

          <div class="sport">
          <?php foreach($sport_aquatique as list($nom)){?>

            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom ?>.png" /></a>

              </div>
              <h4><?php echo $nom ?></h4>
            </div>

          <?php
      }?>
      </div>
        </div>

        <div class="sports">
          <div class="sports-ballons_title">
            <h2>SPORTS DE BALLONS</h2>
          </div>


          <div class="sport">

          <?php foreach($sport_ballon as list($nom)){?>

            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
              </div>
              <h4><?php echo $nom ?></h4>
            </div>

          <?php
      }?>

          </div>
        </div>

          <div class="sports">
            <div class="sports-raquettes_title">
              <h2>SPORTS DE RAQUETTES</h2>
            </div>


            <div class="sport">
            <?php foreach($sport_raquette as list($nom)){?>

              <div class="detail">
                <div class="image">
                  <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
                </div>
                <h4><?php echo $nom ?></h4>
              </div>

            <?php
        }?>
            </div>
          </div>

            <div class="sports">
              <div class="sports-nature_title">
                <h2>SPORTS DE NATURE</h2>
              </div>


              <div class="sport">
              <?php foreach($sport_nature as list($nom)){?>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
                  </div>
                  <h4><?php echo $nom ?></h4>
                </div>

              <?php
          }?>
          </div>


            </div>

            <div class="sports">
              <div class="sports-combats_title">
                <h2>SPORTS DE COMBATS</h2>
              </div>


              <div class="sport">
              <?php foreach($sport_combat as list($nom)){?>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
                  </div>
                  <h4><?php echo $nom ?></h4>
                </div>

              <?php
          }?>
          </div>
            </div>
            <br><br>

          <?php  if(isset($_SESSION['pseudo'])){?>
            <div class="propose">
              <a href="index.php?page=proposition_sport">Proposez un sport !</a>
            </div>
            <?php
          }?>



          </div>
<br><br>


        </div>
      </div>

  </div>
  </body>
  </html>

  <?php require "Vues/footer.php"; ?>
