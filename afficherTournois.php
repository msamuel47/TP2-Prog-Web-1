<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-03
 * Time: 12:09 PM
 */

function ShowTournament()
{
    if(is_file("tournois.txt"))
    {
        $arrayOfString = file("tournois.txt");

        foreach($arrayOfString as $key => $value)
        {
           $arrayOfString[$key] = explode('|' , trim($value));

        }
        echo'<table id="showedtournament" border="">
<th>Nom de l\'évenement</th>
<th>Date</th>
<th>Ville</th>
<th>Pays</th>
<th>Le jeu</th>
<th>Nombre de joueurs</th>
</table>';
        

    }
}