<!doctype html>
<html lang="en">
<?php
include "entete.php";
include "pieddepage.php";
include "htmlhead.php";
MakeHTMLHead();
?>


<body onload="setInterval(pictureCarousel())">
<div id="container">
    <?php
    ShowHeader();
    ?>
    <div id="contenu">
        <div id="gauche">
            <img id="carousel" src="img/image1.jpg">
        </div>
        <div id="droite">
            <form action="traitementRecherche.php" method="post">
                <table>
                    <td>
                        <label>Nom du tournoi :</label>
                    </td>
                    <td>
                        <input type="text" name="nom"/>
                    </td>
                    <?php
                    if (isset($_GET['errorEmpty'])) {
                        echo '<p class="errormessagelol">Veuillez remplir le champ S.V.P</p>';
                    }
                    ?>
                </table>
                <button type="submit" value="submit">submit</button>
            </form>
        </div>

        <div class="clear"></div>
    </div>

    <?php
    ShowFooter();
    ?>


</div>
</body>
</html>
