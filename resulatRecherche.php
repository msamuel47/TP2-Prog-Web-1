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
				if(isset($_SESSION['array']) && !empty($_SESSION['array'])){
                    echo '<p class="title" style="color: black;">Résultat de la recherche</p>';
                    echo '<div class="tableTournament"><table class="tablestyle" border="1">
              <th>Nom de l\'évenement</th>
              <th>Date</th>
              <th>Ville</th>
              <th>Pays</th>
              <th>Le jeu</th>
              <th>Nombre de joueurs</th>
              ';
                    foreach ($_SESSION['array'] as $index => $value) {

                        echo '<tr>';
                        echo '<td>';
                        echo $_SESSION['array'][$index][0];
                        echo '</td>';
                        echo '<td>';
                        echo date("F j, Y", $_SESSION['array'][$index][1]);
                        echo '</td>';
                        echo '<td>';
                        echo $_SESSION['array'][$index][2];
                        echo '</td>';
                        echo '<td>';
                        echo $_SESSION['array'][$index][3];
                        echo '</td>';
                        echo '<td>';
                        echo $_SESSION['array'][$index][4];
                        echo '</td>';
                        echo '<td>';
                        echo trim($_SESSION['array'][$index][5]);
                        echo '</td>';
                        echo '</tr>';
                    }
                    echo '</table></div>';
                }
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

