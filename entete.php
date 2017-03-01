<?php

function ShowHeader()
{
    echo '	<div id="entete">
			<img class="logoandbanner" src="img/logo.png" alt="TheLogo">
			<img class="logoandbanner" src="img/banner.png" alt="TheBanner">
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