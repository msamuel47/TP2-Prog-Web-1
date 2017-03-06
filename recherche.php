<!doctype html>
<html lang="en">
<?php
include  "resultatrecherche.php";
include  "rechercher.php";
include  "entete.php";
include  "pieddepage.php";
?>

<head>
    <meta charset="UTF-8">
    <title>Rechercher</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
	<div id="container">
		<?php
		ShowHeader();
		?>
		<div id="contenu">
			

			<div id="gauche">
			   <script>
					var i=0;
					setInterval(change_pic(i),2000);
			   </script>
			   <img id="defile" src="img/image1.jpg" width="100%" >
			</div>
			<div id="droite">
				<form action="">
					nom du tournoi        :<input type="text" name="nom"/>
					</br>
					 date:<input type="text" name="date"/>
					</br>
					emplacement      :<input type="text" name="emplacement"/>
					</br>	
					jeux<input type="text" name="jeux"/>
					</br>
					nombre de joueurs<input type="text" name="joueur"/>
					</br>
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
