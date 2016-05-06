<?php require '../Vues/header.php'; ?>

<link rel="stylesheet" href="../Contenu/sports.css" >


            <div class="top"><p>SPORTS PROPOSÉS</p>
                </div>

	<div class="sports-aquatiques"><h2 class="categorie-sports">Sports aquatiques</h2>

		<a href="controleurSportchoisi.php?sport=<?php echo('Natation');?>"><img class="imgsport" src="../Images/clipart_Natation.png.jpg"></a>
		<a href="sportChoisi.php?sport=<?php echo('Wakeboard');?>"><img class="imgsport" src="../Images/clipart_Wakeboard.png.jpg"></a>

	</div>

	<div class="sports-plein-air"><h2 class="categorie-sports">Sports en plein air</h2>

		<a href="sportChoisi.php?sport=<?php echo('Tennis');?>"><img class="imgsport" src="../Images/clipart_Tennis.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Football');?>"><img class="imgsport" src="../Images/clipart_Football.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Roller');?>"><img class="imgsport" src="../Images/clipart_Roller.png.jpg"></a>
		<a href="sportChoisi.php?sport=<?php echo('Escalade');?>"><img class="imgsport" src="../Images/clipart_Escalade.png.jpg"></a>

	</div>

	<div class="sports-en-salle"><h2 class="categorie-sports">Sports en salle</h2>

		<a href="sportChoisi.php?sport=<?php echo('Handball');?>"><img class="imgsport" src="../Images/clipart_Handball.png.jpg"></a>
		<a href="sportChoisi.php?sport=<?php echo('Boxe');?>"><img class="imgsport" src="../Images/clipart_Boxe.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Basket');?>"><img class="imgsport" src="../Images/clipart_Basket.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Tennis');?>"><img class="imgsport" src="../Images/clipart_Tennis.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Basket');?>"><img class="imgsport" src="../Images/clipart_Football.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Escalade en salle');?>"><img class="imgsport" src="../Images/clipart_Escalade-en-salle.png.jpg"></a>
	</div>

	<div class="sports-co"><h2 class="categorie-sports">Sports collectifs</h2>
		<a href=""><img class="imgsport" src="../Images/clipart_football.png"></a>
		<a href=""><img class="imgsport" src="../Images/clipart_basket.png"></a>
		<a href=""><img class="imgsport" src="../Images/clipart_Handball.png.jpg"></a>
		<a href=""><img class="imgsport" src="../Images/clipart_Volleyball.png.jpg"></a>
	</div>
		<div class="ajoutsport">
			<a href="controleurSport.php">Proposer un Sport !</a>
		</div>

			<div class="proposersport">
				<a href="/MyBoost2/Controleurs/controleurSports.php">Proposez un sport !</a>
			</div>
<?php require "../Vues/footer.php"; ?>
