<?php


function ShowTournament()
{
    if (is_file("tournois.txt")) {
        $arrayOfString = file("tournois.txt");

        foreach ($arrayOfString as $key => $value) {
            $arrayOfString[$key] = explode('|', trim($value));
        }
        GetOrganisedTournament(0);

    }
}

// Fonction qui retourne un array des tournois qui seront a venir (timestamp plus grand que le timestamp actuel)
// Si la valeur $upperOrLower est a 0, la méthode va afficher les evenement déja passé et si est a 1 retourne les tournois a venir
// Le retour se fait sous forme de tableau html prendre en considération
function GetOrganisedTournament($upperOrLower)
{
    if (is_file("tournois.txt")) {
        //ouverture du fichier en question
        $tournoisATrier = file('tournois.txt');
        if ($upperOrLower == 0) {
            $tournoisPasserDate = TrierTableau($tournoisATrier, 0, 1, Time());

            echo '<p class="title" style="color: black;">Tournois terminés</p>';
            echo '<div id="tableTournament"><table id="showedtournament" border="1">
              <th>Nom de l\'évenement</th>
              <th>Date</th>
              <th>Ville</th>
              <th>Pays</th>
              <th>Le jeu</th>
              <th>Nombre de joueurs</th>
              ';

            foreach ($tournoisPasserDate as $index => $value) {

                echo '<tr>';
                echo '<td>';
                echo  $tournoisPasserDate[$index][0];
                echo '</td>';
                echo '<td>';
                echo date("F j, Y" , $tournoisPasserDate[$index][1]);
                echo '</td>';
                echo '<td>';
                echo  $tournoisPasserDate[$index][2];
                echo '</td>';
                echo '<td>';
                echo  $tournoisPasserDate[$index][3];
                echo '</td>';
                echo '<td>';
                echo  $tournoisPasserDate[$index][4];
                echo '</td>';
                echo '<td>';
                echo  $tournoisPasserDate[$index][5];
                echo '</td>';
                echo '</tr>';
            }
echo '</table></div>';
        }
        if ($upperOrLower == 1) {
            $tournoisAVenir = TrierTableau($tournoisATrier, 1, 1, Time());
            var_dump($tournoisAVenir);
        }
    }
}

//Cette métohde permet de trier des tableau de tableau à l'aide d'un élement spécifique d'un indice dans le tableau de tableau ??
// Si le valueToReturn est à 0 alors la méthode va retourner un tableau contenant les element plus petit que la valeur entré en parametre et si a 1 retourne valeur superieure
// $indexForTheSorting sert a spécifier l'indice de l'élément pour le triage
function TrierTableau($arrayToSort, $valueToReturn, $indexForTheSorting, $valueForSorting)

{


    foreach ($arrayToSort as $key => $value) {
        $arrayToSort[$key] = explode('|', $value);
    }
    foreach ($arrayToSort as $key => $value) {
        if ($arrayToSort[$key][$indexForTheSorting] > $valueForSorting) {
            // Valeurs supérieures à la valeur entrée en paramêtre
            $arrayToSortUpperValue[$key] = $arrayToSort[$key];

        } else {
            // Valeurs inférieures à la valeur entrée en paramêtre
            $arrayToSortLowerValue[$key] = $arrayToSort[$key];
        }


    }
    if ($valueToReturn == 0) {

        // Triage du tournoi qui a la date le plus proche du timestamp au plus grand
        foreach ($arrayToSortLowerValue as $index => $value) {
            $indices[$index] = strtolower($arrayToSortLowerValue[$index][1]);
            //Triage des indexes du tableau
            asort($indices);
            //Creation du tableau contenant les indices triées par ordre de timestamp
            $tableauDindice = array_keys($indices);
        }

        // Méthode de triage et organisation des indices du tableau ...
        for ($i = 0; $i < count($arrayToSortLowerValue); $i++) {
            $organisedArrayLowerValue[$i] = $arrayToSortLowerValue[$tableauDindice[$i]];
        }
        return $organisedArrayLowerValue;
    }
    if ($valueToReturn == 1) {
        // Triage du tournoi qui a la date le plus proche du timestamp au plus grand
        foreach ($arrayToSortUpperValue as $index => $value) {
            $indices[$index] = strtolower($arrayToSortUpperValue[$index][1]);
            //Triage des indexes du tableau
            asort($indices);
            //Creation du tableau contenant les indices triées par ordre de timestamp
            $tableauDindice = array_keys($indices);
        }

        // Méthode de triage et organisation des indices du tableau ...
        for ($i = 0; $i < count($arrayToSortUpperValue); $i++) {
            $organisedArrayUpperValue[$i] = $arrayToSortUpperValue[$tableauDindice[$i]];
        }
        return $organisedArrayUpperValue;
    } //Si la valeur entrée ne fait pas partie des options
    else {
        //On retourne de la bullshit
        return $bullshit = [];
    }

}

