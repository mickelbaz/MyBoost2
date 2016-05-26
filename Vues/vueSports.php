<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Contenu/sports.css" >
    <title>Liste des sports</title>
  </head>
  <body>





<!--
<div><p class="proposition_sport">
<a href="index.php?page=proposition_sport">Proposez un sport !</a>
</p></div>
            <div class="top">
              <p>SPORTS PROPOSÉS</p>
        			    </div>
  <div id="bloc_page">
	   <div class="sports-aquatiques"><h2 class="categorie-sports">Sports aquatiques</h2>

		<a href="index.php?page=sport&sport=<?php echo('Natation');?>"><img class="imgsport" src="Images/clipart_Natation.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Wakeboard');?>"><img class="imgsport" src="Images/clipart_Wakeboard.png"></a>

	   </div>

	    <div class="sports-plein-air"><h2 class="categorie-sports">Sports en plein air</h2>

		<a href="index.php?page=sport&sport=<?php echo('Tennis');?>"><img class="imgsport" src="Images/clipart_Tennis.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Football');?>"><img class="imgsport" src="Images/clipart_Football.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Roller');?>"><img class="imgsport" src="Images/clipart_Roller.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Escalade');?>"><img class="imgsport" src="Images/clipart_Escalade.png"></a>

	   </div>

	   <div class="sports-en-salle"><h2 class="categorie-sports">Sports en salle</h2>

		<a href="index.php?page=sport&sport=<?php echo('Handball');?>"><img class="imgsport" src="Images/clipart_Handball.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Boxe');?>"><img class="imgsport" src="Images/clipart_Boxe.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Basketball');?>"><img class="imgsport" src="Images/clipart_Basketball.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Tennis');?>"><img class="imgsport" src="Images/clipart_Tennis.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Basketball');?>"><img class="imgsport" src="Images/clipart_Basketball.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Escalade en salle');?>"><img class="imgsport" src="Images/clipart_Escalade en salle.png"></a>
	   </div>

	    <div class="sports-co"><h2 class="categorie-sports">Sports collectifs</h2>
		<a href="index.php?page=sport&sport=<?php echo('Football');?>"><img class="imgsport" src="Images/clipart_Football.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Basketball');?>"><img class="imgsport" src="Images/clipart_Basketball.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Handball');?>"><img class="imgsport" src="Images/clipart_Handball.png"></a>
		<a href="index.php?page=sport&sport=<?php echo('Volleyball');?>"><img class="imgsport" src="Images/clipart_Volleyball.png"></a>
	   </div>


  </div>

-->

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
          </div>
        </div>

        <div class="sports">

          <div class="sports-balons_title">
            <h2>SPORTS DE BALONS</h2>
          </div>

          <div class="sport">
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

          </div>
        </div>

          <div class="sports">
            <div class="sports-raquette_title">
              <h2>SPORTS DE RAQUETTE</h2>
            </div>

            <div class="sport">

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


            </div>
          </div>

            <div class="sports">
              <div class="sports-nature_title">
                <h2>SPORTS DE NATURE</h2>
              </div>

              <div class="sport">

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


              </div>



            </div>
            <br><br>

            <div class="propose">
              <a href="index.php?page=proposition_sport">Proposez un sport !</a>
            </div>

          </div>
<br><br>


        </div>
      </div>

  </div>
  </body>
  </html>

  <?php require "Vues/footer.php"; ?>
