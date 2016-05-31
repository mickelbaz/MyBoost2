<?php require 'Vues/header.php'; ?>

<link type="text/css" rel="stylesheet" href="Contenu/liste_groupe.css"/>

<br></br>
<table style="border-collapse:collapse;">
  <thead>
      <tr>
        <th colspan="2">
          <img src="Images/locker.png" style="margin-bottom:1em;" />
        </th>
      </tr>
      <tr style="border-bottom:1px solid black;">
          <th id="title" colspan="2">Liste des clubs</th>
      </tr>
  </thead>

  <tbody>
    <tr></tr>
    <?php
    if(count($salle)==0){?>
      <tr><td>Aucune salle</td></tr>
    <?php
    }
    else{
    for($i=0;$i<count($salle);$i++){?>
      <tr><td style="padding:1em;"> <?php echo $salle[$i][0]; ?></td>
      <td><a href="index.php?page=club&club=<?php echo $salle[$i][0] ?>"><INPUT type="button" name="voir" value="Plus d'infos"/></a></td>
    </tr>
    <?php
    }
  }?>
  </tbody>
  </table>
  <br></br>
  <div class="ajout"><a href="index.php?page=ajouter_club"><INPUT type="button" name="ajouter_club" value="Ajouter un club"/></a></div>
<br></br>

<?php require 'Vues/footer.php'; ?>
