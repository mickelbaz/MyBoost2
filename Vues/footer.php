<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Contenu/headerFooter.css">
    <title></title>
  </head>
  <body>

<footer>
    <?php if(isset($_SESSION['pseudo'])){?>
      <div class="credit">
          <a href="https://www.facebook.com/MyBoost-1136877939682445/?fref=ts"><img src="Images/logoface.png" alt="facebook"></a>
          &nbsp;
          <a href="https://twitter.com/myb00st"><img src="Images/logotwit.png" alt="twitter"></a>
          &nbsp;
          <a href="https://www.instagram.com/"><img src="Images/logoinsta.png" alt="insta"></a>
          &nbsp;
          <p>
            MyBoost &copy; 2016 - Tous droits r&eacute;serv&eacute;s
          </p>
      </div>

      <div class="faq">
          <a href="index.php?page=faq"><p>Besoin d'aide ?<p></a>
          <a href="index.php?page=faq"><img src="Images/info.png" /></a>
      </div>
    <?php
    }
    else{ ?>
      <div class="rejoindre">
        <a href="index.php?page=inscription">Rejoignez-nous !</a>
      </div>

      <div class="credit">
          <a href="https://www.facebook.com/MyBoost-1136877939682445/?fref=ts"><img src="Images/logoface.png" alt="facebook"></a>
          &nbsp;
          <a href="https://twitter.com/myb00st"><img src="Images/logotwit.png" alt="twitter"></a>
          &nbsp;
          <a href="https://www.instagram.com/"><img src="Images/logoinsta.png" alt="insta"></a>
          &nbsp;
          <p>
            MyBoost &copy; 2016 - Tous droits r&eacute;serv&eacute;s
          </p>
      </div>

      <div class="faq">
          <a href="index.php?page=faq"><p>Besoin d'aide ?<p></a>
          <a href="index.php?page=faq"><img src="Images/info.png" /></a>
      </div>






</footer>
</body>
<?php
  }
  ?>
</html>
