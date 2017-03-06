<?php


function ShowTournament()
{
    if (is_file("tournois.txt")) {
        $arrayOfString = file("tournois.txt");

        foreach ($arrayOfString as $key => $value) {
            $arrayOfString[$key] = explode('|', trim($value));

        }
        echo '<table id="showedtournament" border="">
              <th>Nom de l\'évenement</th>
              <th>Date</th>
              <th>Ville</th>
              <th>Pays</th>
              <th>Le jeu</th>
              <th>Nombre de joueurs</th>
              </table>';
        GetFutureTournament();
    }
}

// Fonction qui retourne un array des tournois qui seront a venir (timestamp plus grand que le timestamp actuel)
function GetFutureTournament()
{
    if (is_file("tournois.txt")) {
        //ouverture du fichier en question
        $tournoisATrier = file('tournois.txt');
        $tournoisAAfficher = [];
        $tournoisPasserDate = [];
        foreach ($tournoisATrier as $key => $value) {
            $tournois[$key] = explode('|', $value);
        }
        foreach ($tournois as $key => $value) {
            if ($tournois[$key][1] > time()) {
                $tournoisAAfficher[$key] = $tournois[$key];
            } else {
                $tournoisPasserDate[$key] = $tournois[$key];
            }


        }

    }
}