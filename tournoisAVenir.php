<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
include  "afficherTournois.php";
?>
<head>
	<meta charset="UTF-8">
	<title>Événement à venir</title>
	<link rel="stylesheet" href="CSS/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div id="container">
        <?php
        ShowHeader();
        ?>
		<div id="contenu">
		
		
			<div id="gauche" style="height: 520px;">
			
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