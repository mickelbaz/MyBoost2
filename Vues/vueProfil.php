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
                    <img src="Images/list.png" style="margin-left:13em; margin-bottom:1em;" />
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
                  <img src="Images/home.png" style="margin-left:13em; margin-bottom:1em;" />
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
<br>
<div>
        <img src="Images/prev.svg" id="prev" alt="<--"/>
        <img src="Images/next.svg" id="next" alt="-->"/>
       <!-- <button onclick="clickPrev()"><img id="prev" src="prev.svg"></button>
        <button onclick="clickNext()"><img id="next" src="next.svg"></button>
        <a href="#"><img id="next" src="next.svg" ></a>
    </div>  -->
<?php

date_default_timezone_set('Europe/Paris');

?>

    <div class="periods">
        <div class="year"><?php echo date('Y');?> </div>
        <p id="months"><?php echo date('M'); ?> </p>

    <?php
        $year   = date('Y') - 2;
        $r      = array();
        $date   = strtotime($year.'-01-01');
        $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

        while (date('Y', $date) < date('Y') + 4)
        {

            if(date('j', $date) == 1) {
    ?>
            <div class="month m<?php echo date('n-Y', $date); ?>">
                <table>
                    <thead>
                        <tr>
                            <?php foreach ($days as $d): /*on parcourt le tableau $date duquel on choppe les jours qu'on associe a $d */ ?>
                                <th> <?php echo $d; /*On les affiche ensuite*/ ?>   </th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
    <?php
            }
                        if(date('j', $date) == 1 and date('N', $date) != 1):
    ?>
                            <td colspan="<?php echo date('N', $date)-1;?>" class="padding"></td>
    <?php
                        endif;
    ?>
                            <td class="lines"><?php echo date('j', $date); ?></td>
    <?php
                        if(date('N', $date) == 7):
    ?>
                            </tr><tr>
    <?php
                        endif;

            if(date('t', $date) == date('j', $date)):
    ?>
                        </tr>
                    </tbody>
                </table>
            </div>

    <?php
            endif;

            $date= strtotime(date('Y-n-j',$date).' +1 DAY');
        }
    ?>

</div>

<br></br>

</div>
  </body>

<script type="text/javascript">

window.onload =function() {

	nomsDesMois = new Array(0, "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre") ;


	// Cache tous les mois
	var mois = document.querySelectorAll(".month");

	for (var i = mois.length - 1; i >= 0; i--) {

		mois[i].style.display = 'none';
	}

	// Fais apparaitre le mois courant
	var d = new Date();
	var n = d.getMonth() + 1;
	var y = d.getFullYear();
							// .m6-2016
	document.querySelector('.m' + n + '-' + y).style.display = '';


	var months = document.querySelector("#months");
	var year = document.querySelector(".year");

	var prev = document.querySelector("#prev");
	var next = document.querySelector("#next");

	prev.addEventListener('click', function(){

		document.querySelector('.m' + n + '-' + y).style.display = 'none';

		n--;
		if(n < 1) {
			y--;
			n = 12;
		}

		document.querySelector('.m' + n + '-' + y).style.display = '';

		months.innerHTML = nomsDesMois[n];
		year.innerHTML = y;
	});

	next.addEventListener('click', function(){

		document.querySelector('.m' + n + '-' + y).style.display = 'none';

		n++;
		if(n > 12) {
			y++;
			n = 1;
		}

		document.querySelector('.m' + n + '-' + y).style.display = '';

		months.innerHTML = nomsDesMois[n];
		year.innerHTML = y;
	});

};

</script>

<?php require "Vues/footer.php"; ?>
