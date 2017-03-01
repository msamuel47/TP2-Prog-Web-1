<?php

function ShowHeader()
{
    echo '	<div id="entete">
			<div id="logo"></div>
			<div id="login_space"><p id="loginlink"><a  href="connexion.php">Connexion</a></p></div>
			<div id="banner"></div>
			
			<div class="clear"></div>
		</div>
		<div id="menu">
			<div class="linkitem"><a href="index.php">Acceuil</a></div>
			<div class="linkitem"><a href="tournoisAVenir.php">Tournois à venir</a></div>
			<div class="linkitem"><a href="recherche.php">Rechercher</a></div>
			<div class="linkitem"><a href="enregistrer.php">Enregistrer un tournoi</a></div>
			<div class="clear"></div>
		</div>';
}

?>