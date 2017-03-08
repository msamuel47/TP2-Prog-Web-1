<!doctype html>
<html lang="en">
<?php
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
				<form action="traitementRecherche.php" method="post">
				 <table>
				    
					nom du tournoi        :<input type="text" name="nom"/>
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
