<?php require "Vues/header.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="Contenu/profil.css"/>
    <title>Mon profil</title>
  </head>
  <body>


</html>
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
                <tr>
                  <th>
                    <img src="Images/notepad.png" style="margin-left:13em; margin-bottom:1em;" />
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
                  <img src="Images/place.png" style="margin-left:13em; margin-bottom:1em;" />
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
          <div class=groupe><?php echo $c[$i][0]; ?></div>
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
      <div class=liste><?php echo $nom ?>&nbsp organisé par le groupe <?php echo $groupe?>&nbsp le <?php echo $date ?>&nbsp à <?php echo $heure ?> &nbsp à &nbsp <?php echo $lieu ?></div>
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


<br></br>
<div class="calendrier">



<script type="text/javascript">

  function maxDays(mm, yyyy){
  var mDay;
  	if((mm == 3) || (mm == 5) || (mm == 8) || (mm == 10)){
  		mDay = 30;
    	}
    	else{
    		mDay = 31
    		if(mm == 1){
     			if (yyyy/4 - parseInt(yyyy/4) != 0){
     				mDay = 28
     			}
  		   	else{
     				mDay = 29
    			}
  		}
    }
  return mDay;
  }
  function changeBg(id){
  	if (eval(id).style.backgroundColor != "yellow"){
  		eval(id).style.backgroundColor = "yellow"
  	}
  	else{
  		eval(id).style.backgroundColor = "#ffffff"
  	}
  }

  function writeCalendar(){
  var now = new Date
  var dd = now.getDate()
  var mm = now.getMonth()
  var dow = now.getDay()
  var yyyy = now.getFullYear()
  var arrM = new Array("Janvier","February","March","April","May","June","July","August","September","October","November","December")
  var arrY = new Array()
  	for (ii=0;ii<=4;ii++){
  		arrY[ii] = yyyy - 2 + ii
  	}
  var arrD = new Array("Dimanche","Mon","Tue","Wed","Thu","Fri","Sat")

  var text = ""
  text = "<form name=calForm>"
  text += "<table border=1>"
  text += "<tr><td>"
  text += "<table width=100%><tr>"
  text += "<td align=left>"
  text += "<select name=selMonth onChange='changeCal()'>"
  	for (ii=0;ii<=11;ii++){
  		if (ii==mm){
  			text += "<option value= " + ii + " Selected>" + arrM[ii] + "</option>"
  		}
  		else{
  			text += "<option value= " + ii + ">" + arrM[ii] + "</option>"
  		}
  	}
  text += "</select>"
  text += "</td>"
  text += "<td align=right>"
  text += "<select name=selYear onChange='changeCal()'>"
  	for (ii=0;ii<=4;ii++){
  		if (ii==2){
  			text += "<option value= " + arrY[ii] + " Selected>" + arrY[ii] + "</option>"
  		}
  		else{
  			text += "<option value= " + arrY[ii] + ">" + arrY[ii] + "</option>"
  		}
  	}
  text += "</select>"
  text += "</td>"
  text += "</tr></table>"
  text += "</td></tr>"
  text += "<tr><td>"
  text += "<table border=1>"
  text += "<tr>"
  	for (ii=0;ii<=6;ii++){
  		text += "<td align=center><span class=label>" + arrD[ii] + "</span></td>"
  	}
  text += "</tr>"
  aa = 0
  	for (kk=0;kk<=5;kk++){
  		text += "<tr>"
  		for (ii=0;ii<=6;ii++){
  			text += "<td align=center><span id=sp" + aa + " onClick='changeBg(this.id)'>1</span></td>"
  			aa += 1
  		}
  		text += "</tr>"
  	}
  text += "</table>"
  text += "</td></tr>"
  text += "</table>"
  text += "</form>"
  document.write(text)
  changeCal()
  }

  function changeCal(){
  var now = new Date
  var dd = now.getDate()
  var mm = now.getMonth()
  var dow = now.getDay()
  var yyyy = now.getFullYear()
  var currM = parseInt(document.calForm.selMonth.value)
  var prevM
  	if (currM!=0){
  		prevM = currM - 1
  	}
  	else{
  		prevM = 11
  	}
  var currY = parseInt(document.calForm.selYear.value)
  var mmyyyy = new Date()
  mmyyyy.setFullYear(currY)
  mmyyyy.setMonth(currM)
  mmyyyy.setDate(1)
  var day1 = mmyyyy.getDay()
  	if (day1 == 0){
  		day1 = 7
  	}
  var arrN = new Array(41)
  var aa
  	for (ii=0;ii<day1;ii++){
  		arrN[ii] = maxDays((prevM),currY) - day1 + ii + 1
  	}
  	aa = 1
  	for (ii=day1;ii<=day1+maxDays(currM,currY)-1;ii++){
  		arrN[ii] = aa
  		aa += 1
  	}
  	aa = 1
  	for (ii=day1+maxDays(currM,currY);ii<=41;ii++){
  		arrN[ii] = aa
  		aa += 1
  	}
  	for (ii=0;ii<=41;ii++){
  		eval("sp"+ii).style.backgroundColor = "#FFFFFF"
  	}
  var dCount = 0
  	for (ii=0;ii<=41;ii++){
  		if (((ii<7)&&(arrN[ii]>20))||((ii>27)&&(arrN[ii]<20))){
  			eval("sp"+ii).innerHTML = arrN[ii]
  			eval("sp"+ii).className = "c3"
  		}
  		else{
  			eval("sp"+ii).innerHTML = arrN[ii]
  			if ((dCount==0)||(dCount==6)){
  				eval("sp"+ii).className = "c2"
  			}
  			else{
  				eval("sp"+ii).className = "c1"
  			}
  			if ((arrN[ii]==dd)&&(mm==currM)&&(yyyy==currY)){
  				eval("sp"+ii).style.backgroundColor="#90EE90"
  			}
  		}
  	dCount += 1
  		if (dCount>6){
  			dCount=0
  		}
  	}
  }
</script>

<script type="text/javascript">writeCalendar()</script>

</div>
  </body>

<?php require "Vues/footer.php"; ?>
