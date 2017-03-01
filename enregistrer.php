<!doctype html>
<html lang="en">
<?php
include  "entete.php";
include  "pieddepage.php";
?>
<head>
	<meta charset="UTF-8">
	<title>Les 4 jeux</title>
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
                <form action="traitement.php" method="post" >
                    <table>
                        <tr>
                            <td><label> Prenom :</label></td>
                            <td><input type="text" name="prenom"/></td>
                        </tr>
                        <tr>
                            <td><label> Nom :</label></td>
                            <td> <input type="text" name="nom" /></td>
                        </tr>
                        <tr>
                            <td><label> Matricule :</label></td>
                            <td> <input type="text" name="matricule" maxlength="3" size="3" /></td>
                        </tr>
                        <tr>
                            <td><label> Jours demandés :</label></td>
                            <td> <input type="text" name="jours"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="soumettre"/></td>
                        </tr>
                    </table>


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