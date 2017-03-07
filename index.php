<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
?>

<head>
	<meta charset="UTF-8">
	<title>MLG tournament</title>
	<link rel="stylesheet" href="CSS/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="js/banniere.js"></script>
</head>
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