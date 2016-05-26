<?php require '../Vues/header.php'; ?>

<link rel="stylesheet" href="../Contenu/sports.css" >
<link rel="stylesheet" href="../Contenu/PropositionSport.css" >


            <div class="top"><p>PROPOSER UN SPORT</p>
                </div>

            <div>
              <center>
              <form action="#" method="post" >

                <label id="proposer" for="email">Nom du sport :</label>
                <input id="proposer" type="text" name="nom" size="20" maxlength="40" id="nom" />

                <label id="proposer" for="description">Description du sport :</label>
                <textarea id="proposer" name="description" id="description" cols="20" rows="4"></textarea>

                <br>
                <br>
                <p align="left">
                Ajouter un logo pour ce sport (<img src="../Images/warning.png"> en PNG) :
                <input type="file" name="logo" id="logo" />
                <br>
                </p>

                <br>
               <p>
               <input type="submit" value="Envoyer" />
               <input type="reset" value="Annuler" />
               </p>

              </form>
            </center>
            </div>



<?php require "../Vues/footer.php"; ?>
