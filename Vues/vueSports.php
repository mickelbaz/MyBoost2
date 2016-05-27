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
          <!--<div class="sport">
            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo('Natation');?>"><img src="Images/natation.png" /></a>
              </div>
              <h4>Natation</h4>
            </div>
            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo('Waterpolo');?>"><img src="Images/waterpolo.png" /></a>
              </div>
              <h4>Waterpolo</h4>
            </div>
            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo('Canoë');?>"><img src="Images/canoë.png" /></a>
              </div>
              <h4>Canoë</h4>
            </div>
          </div>-->
          <?php foreach($sport_aquatique as list($nom)){?>
            <div class="sport">
            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
              </div>
              <h4><?php echo $nom ?></h4>
            </div>
          </div>
          <?php
      }?>
        </div>

        <div class="sports">
          <div class="sports-ballons_title">
            <h2>SPORTS DE BALLONS</h2>
          </div>

        <!--  <div class="sport">
            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo('Football');?>"><img src="Images/football.png" /></a>
              </div>
              <h4>Football</h4>
            </div>

            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo('Basketball');?>"><img src="Images/basketball.png" /></a>
              </div>
              <h4>Basketball</h4>
            </div>

            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo('Volleyball');?>"><img src="Images/volleyball.png" /></a>
              </div>
              <h4>Volleyball</h4>
            </div>

          </div>-->

          <?php foreach($sport_ballon as list($nom)){?>
            <div class="sport">
            <div class="detail">
              <div class="image">
                <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
              </div>
              <h4><?php echo $nom ?></h4>
            </div>
          </div>
          <?php
      }?>
        </div>

          <div class="sports">
            <div class="sports-raquettes_title">
              <h2>SPORTS DE RAQUETTES</h2>
            </div>

          <!--  <div class="sport">

              <div class="detail">
                <div class="image">
                  <a href="index.php?page=sport&sport=<?php echo('Tennis');?>"><img src="Images/tennis.png" /></a>
                </div>
                <h4>Tennis</h4>
              </div>

              <div class="detail">
                <div class="image">
                  <a href="index.php?page=sport&sport=<?php echo('Ping-pong');?>"><img src="Images/ping-pong.png" /></a>
                </div>
                <h4>Ping-pong</h4>
              </div>

              <div class="detail">
                <div class="image">
                  <a href="index.php?page=sport&sport=<?php echo('Badminton');?>"><img src="Images/badminton.png" /></a>
                </div>
                <h4>Badminton</h4>
              </div>


            </div>-->
            <?php foreach($sport_raquette as list($nom)){?>
              <div class="sport">
              <div class="detail">
                <div class="image">
                  <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
                </div>
                <h4><?php echo $nom ?></h4>
              </div>
            </div>
            <?php
        }?>
          </div>

            <div class="sports">
              <div class="sports-nature_title">
                <h2>SPORTS DE NATURE</h2>
              </div>

            <!--  <div class="sport">

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Vélo');?>"><img src="Images/vélo.png" /></a>
                  </div>
                  <h4>Vélo</h4>
                </div>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Golf');?>"><img src="Images/golf.png" /></a>
                  </div>
                  <h4>Golf</h4>
                </div>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Équitation');?>"><img src="Images/équitation.png" /></a>
                  </div>
                  <h4>Équitation</h4>
                </div>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Course');?>"><img src="Images/course.png" /></a>
                  </div>
                  <h4>Course</h4>
                </div>


              </div>-->
              <?php foreach($sport_nature as list($nom)){?>
                <div class="sport">
                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
                  </div>
                  <h4><?php echo $nom ?></h4>
                </div>
              </div>
              <?php
          }?>


            </div>

            <div class="sports">
              <div class="sports-combats_title">
                <h2>SPORTS DE COMBATS</h2>
              </div>

            <!--  <div class="sport">

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Boxe');?>"><img src="Images/boxe.png" /></a>
                  </div>
                  <h4>Boxe</h4>
                </div>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Judo');?>"><img src="Images/judo.png" /></a>
                  </div>
                  <h4>Judo</h4>
                </div>

                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo('Escrime');?>"><img src="Images/escrime.png" /></a>
                  </div>
                  <h4>Escrime</h4>
                </div>

              </div>-->
              <?php foreach($sport_combat as list($nom)){?>
                <div class="sport">
                <div class="detail">
                  <div class="image">
                    <a href="index.php?page=sport&sport=<?php echo $nom;?>"><img src="Images/<?php echo $nom?>.png" /></a>
                  </div>
                  <h4><?php echo $nom ?></h4>
                </div>
              </div>
              <?php
          }?>
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
