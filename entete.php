<?php

function ShowHeader()
{

    session_start();

    echo '	<div id="entete">
			<div id="logo"></div>
			<div id="login_space"><p id="loginlink">';


    if (isset($_SESSION['user']))
    {
        echo'<a id="logoff" href="deconnexion.php">Deconnexion</a>';
       echo '<p id="welcomemessage">Bienvenue <strong>' . $_SESSION['user'] . '</strong></p>';
    }else
    {

        echo '<a  href="connexion.php">Connexion</a>';
    }




			echo'</p></div>
			<div id="banner"></div>
			
			<div class="clear"></div>
		</div>
		<div id="menu">
			<div class="linkitem"><a href="index.php">Acceuil</a></div>
			<div class="linkitem"><a href="tournoisAVenir.php">Tournois à venir</a></div>
			<div class="linkitem"><a href="recherche.php">Rechercher</a></div>';
            if(isset($_SESSION['user']))
            {
               echo '<div class="linkitem" ><a href = "enregistrer.php" > Enregistrer un tournoi </a ></div >';
            }
            echo'
			<div class="clear"></div></div>';
}

?>