<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
include "htmlhead.php";
MakeHTMLHead();
?>


<body onload="pictureCarousel()">
	<div id="container">
	
        <?php
        ShowHeader();

        ?>
		<div id="contenu">
			<div id="gauche">
                <img id="carousel" src="img/image1.jpg">
			</div>
			<div id="droite">
			</div>
			

		</div>
    <div class="clear"></div>
	 <?php
    ShowFooter();
    ?>
	</div>
   



	</div>
</body>
</html>