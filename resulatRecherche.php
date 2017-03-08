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
				<?php
				
				
				
				echo($_SESSION);
				
				var_dump($_SESSION);
				?>
					
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

