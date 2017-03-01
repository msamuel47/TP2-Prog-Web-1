<!doctype html>
<html lang="en">
<?php
include  "entete.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Top 3 joueurs</title>
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
            <p class="title">Du talent à revendre ?</p>
            <p class="textleft">Biensur que oui ! notre équipe d'environ 500 joueurs comporte peut être une minueure partie
                de gens qui manque de compétences, mais nous avons ici placé le top 3 des joueurs avec le plus de talent.</p>


            <p class="title">DatBoi</p>
            <p class="title"><img src="img/datboi.gif"></p>
            <p class="textleft"><strong>DatBoi</strong> est un des joueurs les plus craint de l'équipe de l'extra life. Il
            a remporter plusieurs tournois de champion mondial comme : Counter Strike, Dota 2, Battlefield ( 1 ,3 ,4 mais pas
            hardline ;) ). Pourqoi DatBoi est t'il craint ? Nous pensons que derière son corps de grenouille , DatBoi serai en fait
            un "Gansta" de la "West Side" Le jour oû il montrera son identité, nous aurion pas d'autre choix que de dire "Oh Shit Waddup !"</p>
            <p class="title"> Stats joueurs</p>

            <table id="tableplayer" witdh="400" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <th>Nom</th>
                    <th>Argent amassée</th>
                    <th>Jeux completés</th>
                </tr>
                <tr>
                    <td>DatBoi</td>
                    <td>35 000$</td>
                    <td>190</td>
                </tr>
                <tr>

                    <td>John Wick</td>
                    <td>0xfffff$</td>
                    <td>420</td>
                </tr>
                <tr>


                    <td>Snoop Dogg</td>
                    <td>12345$</td>
                    <td>430</td>
                </tr>
            </table>

        </div>
        <div id="droite">
            <p class="title" style="color: black">John Wick</p>
            <img id="johnwick" src="img/johnwick.jpg" alt="John Wick">
            <p class="textright">Jonh Wick était un assasin de haut niveau, il à décider de prendre sa retraite
            John est un professionel du jeu : Counter Strike Global Offensive. Jonh est très habile et a beaucoup
            de reflexes. Veuillez respecter John ou vous pouriez disparaitre de la carte...</p>
            </br>
			</br>
			</br>
			</br>
            <p class="quotejohn" style="float: left;">John Wick</p>
        </div>
        <div id="droite2">
            <p class="title" style="color: black;">Snoop Dogg</p>
            <img id="snoop" src="img/snoopdogg.jpg">
            <p class="textright">Snoop Dogg est un rappeur connu partout dans le monde, par chance il à décider
            de rejoindre l'équipe de l'extra life pour ramasser des fonds. Snoop Dogg a un talent particulier pour les
            jeu de simulation, il est le premier être humain à avoir réussi Goat Simulator. Nous sommes très content de
            l'avoir dans notre équipe.</p>
			</br>
			
            <p class="quotesnoop">Snoop Dogg</p>
        </div>
        <div class="clear"></div>
    </div>

    <div id="pied">
        <p id="footertitle">Nos sponsors</p>
        <img id="intellogo" src="img/intel.png">
        <img id="corsairlogo" src="img/corsairLogo.png">
        <img id="msilogo" src="img/msiLogo.png">
    </div>



</div>
</body>
</html>