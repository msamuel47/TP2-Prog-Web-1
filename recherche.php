<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
include "htmlhead";
MakeHTMLHead();
?>



<body>
	<div id="container">
		<?php
		ShowHeader();
		?>
		<div id="contenu">
			

			<div id="gauche">
                <img id="carousel" src="img/image1.jpg" style="width: 100%">
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
