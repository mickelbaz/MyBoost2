<?php require 'Vues/header.php'; ?>

<link rel="stylesheet" href="Contenu/sports.css" >

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

  <?php require "Vues/footer.php"; ?>
