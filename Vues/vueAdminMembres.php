<?php require 'Vues/header.php' ?>
<p> Afficher les membres </p>

<?php
foreach($membres as list ($nom)){
  echo $nom;
} ?>


<?php require 'Vues/footer.php' ?>
