<?php require 'Vues/header.php' ?>
<p> Liste les groupes </p>

<?php
foreach($groupes as list ($nom)){
  echo $nom;
} ?>


<?php require 'Vues/footer.php' ?>
