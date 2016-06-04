<?php require 'Vues/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/recherche.css">
    <title>Recherche avancée</title>
  </head>

  <body>

    <div class="content">
  
<div class="image" style="text-align:center; margin-top:1em;">
  <img class="logo_loupe" src="Images/loupe.png"/>
</div>

<div class="title">
  <h1>Recherche Avancée</h1>
</div>

<div class="formulaire">


<form name="recherche_avancee" method="post" action="">

<table>
  <tr><td>Je recherche un :</td>
  <td>
    <SELECT name="choix">
    <OPTION>groupe</OPTION>
    <OPTION>membre</OPTION>
    <OPTION>club</OPTION>
  </SELECT>
</td>
</tr>

<tr><td>dans la région :</td>
  <td><SELECT name="region">
<OPTION value="title" selected>Tout
<OPTION>Alsace
<OPTION>Aquitaine
<OPTION>Auvergne
<OPTION>Basse-Normandie
<OPTION>Bourgogne
<OPTION>Bretagne
<OPTION>Centre
<OPTION>Champagne-Ardenne
<OPTION>Corse
<OPTION>Franche-Comté
<OPTION>Haute-Normandie
<OPTION>Île-de-France
<OPTION>Languedoc-Roussillon
<OPTION>Limousin
<OPTION>Lorraine
<OPTION>Midi-Pyrénées
<OPTION>Nord-Pas-de-Calais
<OPTION>Pays de la Loire
<OPTION>Picardie
<OPTION>Poitou-Charentes
<OPTION>Provence-Alpes-Côte d'Azur
<OPTION>Rhône-Alpes
<OPTION>Guadeloupe
<OPTION>Guyane
<OPTION>La Réunion
<OPTION>Martinique
<OPTION>Mayotte
</SELECT>
</td>
</tr>

<tr><td>pratiquant le sport :</td>
  <td><SELECT name="sport">
    <OPTION value="title" selected>Tout
  <?php foreach($sport as list($nom)){?>
    <OPTION><?php echo $nom ?> </OPTION>
    <?php
  }?>
</SELECT>
</td>
</tr>

</table>
<br></br>
<div class="Valider"><input type="submit" name="rechercher" value="Lancer la recherche"/></div>

</form>
</div>

<br></br>
</div>
</body>
</html>
<?php require 'Vues/footer.php' ?>
