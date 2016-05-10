<?php require 'Vues/header.php' ?>

<link rel="stylesheet" type="text/css" href="../Contenu/ForumCSS.css">

<body>
    <div class="formulaire">
    <form action="corpsforum.php" method="post">
            <p>
                <label>Tapez un mot clé :
                    <input type="text" name="recherche"/></label>
                <button iname="r" type="submit" value='Valider'>Rechercher</button>    <!--Bouton pour envoyer les informations-->
            </p>
            <p>
        </form>
    </div>

    <h1>Retrouvez tous les derniers sujets</h1>

    <div class="question">
        <table>
            <tr>
                <td>
                    <h4>
                        Comment entretenir sa forme physique ?
                        <li>
                            <em>le 18/05/2016 à 09h39min</em> &nbsp;par
                            <strong>Jason Smith</strong>
                        </li>
                    </h4>
                </td>
                <td class="lien">
                    <a href="TestForumSujet1.php" ><em>Afficher le sujet</em></a>
                </td>
            </tr>
        </table>
    </div>


    <div class="question">
        <table>
            <tr>
                <td>
                    <h4>
                        Comment modifier son évenement ?
                        <li>
                            <em>le 18/01/2016 à 09h35min</em> &nbsp;par
                            <strong>Tom Peter</strong>
                        </li>
                    </h4>
                </td>
                <td class="lien">
                    <a href="TestForumSujet2.php" ><em>Afficher le sujet</em></a>
                </td>
            </tr>
        </table>
    </div>


    <div class="question">
        <table>
            <tr>
                <td>
                    <h4>
                        Quel salle de sport choisir à Paris ?
                        <li>
                            <em>le 18/01/2016 à 09h18min</em> &nbsp;par
                            <strong>John Sullivan</strong>
                        </li>
                    </h4>
                </td>
                <td class="lien">
                    <a href="topic.php?sujet=7" ><em>Afficher le sujet</em></a>
                </td>
            </tr>
        </table>
    </div>


    <div class="question">
        <table>
            <tr>
                <td>
                    <h4>
                        Les évènements de 2016 à ne pas rater ?
                        <li>
                            <em>le 10/11/2015 à 00h00min</em> &nbsp;par
                            <strong>Samantha Strong</strong>
                        </li>
                    </h4>
                </td>
                <td class="lien">
                    <a href="topic.php?sujet=1" ><em>Afficher le sujet</em></a>
                </td>
            </tr>
        </table>
    </div>

    <div class="lien_affichage">
        <a class="plus" href="corpsforum.php?limit=35">Afficher plus de sujets</a><br/>
    </div>
</body>
<?php require 'Vues/footer.php' ?>
