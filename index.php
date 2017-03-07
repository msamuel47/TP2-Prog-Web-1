<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
include "htmlhead";
MakeHTMLHead();
?>


<body onload="setInterval(pictureCarousel(),1000)">
	<div id="container">
	
        <?php
        ShowHeader();

        ?>
		<div id="contenu">
			<div id="gauche">
                <img id="carousel" src="img/image1.jpg" style="width: 100%">
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