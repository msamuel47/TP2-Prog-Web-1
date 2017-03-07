<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
include  "afficherTournois.php";
include "htmlhead.php";
MakeHTMLHead();
?>

<body onload="setInterval(pictureCarousel(),1000)">
	<div id="container">
        <?php
        ShowHeader();
        ?>
		<div id="contenu">
			<div id="gauche" style="height: 720px;">
                <img id="carousel" src="img/image1.jpg" style="width: 100%">
			</div>
			<div id="droite" style="height: 100%;">
                <?php
                ShowTournament();
                ?>
			</div>
			<div class="clear"></div>
		</div>
        <?php
            ShowFooter();
        ?>
	
	
	
	</div>
</body>
</html>