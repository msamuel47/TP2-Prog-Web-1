<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-01
 * Time: 8:37 AM
 */


//Validation de la form
if (!empty($_POST['nomEvent']) && !empty($_POST['date']) && !empty($_POST['city'])
    && !empty($_POST['maxPlayer']) && !empty($_POST['country']) && !empty($_POST['game'])
) {
    EnregistrerLaForm();
} else {
    //Erreur 1 seulement pour tester pour l'instant ne pas oublier l'ajout d'autre codes d'erreur
    header('Location:enregistrer.php?error=1');
}

function EnregistrerLaForm()
{
    if (is_file("tournois.txt") == true) {
        //Ouverture du fichier en mode ecriture
        $fichier = fopen("tournois.txt", "a");
        $tournoiAEnregistrer = array($_POST['nomEvent'], $_POST['date'], $_POST['city'], $_POST['city'], $_POST['country'], $_POST['game'], $_POST['maxPlayer']);
        var_dump($tournoiAEnregistrer);
        $validerDate = explode('-', $_POST['date']);
        // Valider la date ...
        $dateEnInt = array(intval($validerDate[0]), intval($validerDate[1]), intval($validerDate[2]));
        $timestamp = mktime(0, 0, 0, $validerDate[1], $validerDate[2], $validerDate[0]);
        $stringTimestamp = strval($timestamp);
        //Debugging a retirer a la fin du projet
        var_dump($dateEnInt);
        var_dump($timestamp);
        //Inscription du tournois dans le fichier de texte
        $evenementFormate = "\r\n"  .$_POST['nomEvent'] . '|' . $stringTimestamp . '|' . $_POST['city'] . '|' . $_POST['country'] . '|' . $_POST['game'] . '|' . $_POST['maxPlayer'];
        var_dump($evenementFormate);
        if(fwrite($fichier , $evenementFormate) == true){
            //Code de succès 1 = l'événement à bel et bien été enregistré ...
            header('Location:enregistrer.php?succes=1');
        }
        else {
            //Erreur 200 = probleme avec le fichier : ouvert en readOnly ? , le fichier est t'il en cour d'utilisation ?
            header('Location:enregistrer.php?error=200');
            fclose($fichier);
        }


    } else {
        // Code d'erreur 0 = le fichier n'est pas valide
        header("Location:enregistrer.php?error=0");
    }
}

?>