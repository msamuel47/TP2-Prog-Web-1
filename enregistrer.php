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
    <link rel="javascript" type="text/javascript" href="js/banniere.js">
</head>
<body>
	<div id="container">
        <?php
        ShowHeader();
        ?>
		<div id="contenu">
		
		
			<div id="gauche" style="height: 450px ; background-color: #ff5b5a">

			</div>
			<div id="droite" style="height: 450px">
				<p class="title" style="color: black;">Enregistrer un tournoi</p>
                <div id="form">
                <form action="traitement.php" method="post">
                    <table style="font-family: 'Oxygen', sans-serif">
                        <tr>

                            <td><label> Nom de l'événement :</label></td>
                            <td><input type="text" name="nomEvent"/></td>
                            <?php
                            if(isset($_GET['error']))
                            {
                                echo '<td><p class="errormessagelol">Des champs sont manquant, veuillez complèter le formulaire</p></td>';
                            }
                            if(isset($_GET['succes'])){
                                if($_GET['succes'] == 1){
                                    echo '<td><p style="color: darkgreen ; font-family: \'Oxygen\', sans-serif">Evenement enregistré avec succès ...</p></td>';
                                }
                            }
                            ?>
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
                    <?php
                    if (isset($_GET['error'])){
                        if($_GET['error'] == 0){
                            echo '<p>Le fichier tournois.txt n\'est pas valide</p>';
                        };
                    }
                    ?>


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