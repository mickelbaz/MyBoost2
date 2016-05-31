<?php require "Vues/header.php"; ?>


    <link type="text/css" rel="stylesheet" href="Contenu/FAQ.css"/>

    <body>

          	<h1>FAQ</h1>
            <form name="faq" method="post" action="#">
            <div class='modifier'>
        <dl>

          <dt> <textarea name="question" rows="4" cols="50"><?php echo $texte[0][1] ?></textarea></dt><br />
            <dd><textarea name="reponse" rows="7" cols="100"><?php echo $texte[0][2] ?></textarea></dd>
        </dl>
      </div>
      <div class="modifier"><INPUT type="submit" name='modifier' value="Enregistrer les modifications"/></div>
    </form>
    </body>
    <br></br>


<?php require 'Vues/footer.php' ?>
