<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
?>
<head>
	<meta charset="UTF-8">
	<title>Enregistrer</title>
	<link rel="stylesheet" href="CSS/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>
	<div id="container">
        <?php
        ShowHeader();
        ?>
		<div id="contenu">
		
		
			<div id="gauche">

			</div>
			<div id="droite">
				<p class="title" style="color: black;">Enregistrer un tournoi</p>
                <div id="form">
                <form action="traitement.php" method="post" onsubmit="" >
                    <table>
                        <tr>
                            <td><label> Nom de l'événement :</label></td>
                            <td><input type="text" name="nomEvent"/></td>
                        </tr>
                        <tr>
                            <td><label> Date :</label></td>
                            <td> <input type="date" name="date" /></td>
                        </tr>
                        <tr>
                            <td><label> Ville :</label></td>
                            <td> <input type="text" name="city" /></td>
                        </tr>
                        <tr>
                            <td><label> Pays :</label></td>
                            <td> <input type="text" name="country"/></td>
                        </tr>
                        <tr>
                            <td><label> Jeu :</label></td>
                            <td> <input type="text" name="game"/></td>
                        </tr>
                        <tr>
                            <td><label> Nombre maximum de joueurs :</label></td>
                            <td> <input type="number" maxlength="4" name="maxPlayer"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" onsubmit="" value="soumettre"/></td>
                        </tr>
                    </table>


                </form>
                </div>
			</div>

			<div class="clear"></div>
		</div>

        <?php
            ShowFooter();
        ?>
	
	
	
	</div>
</body>
</html>