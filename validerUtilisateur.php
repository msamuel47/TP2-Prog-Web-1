<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-01
 * Time: 3:00 PM
 */
echo 'lol';
if (!empty($_POST['username']) && !empty($_POST['mdp'])) {
    session_start();
    $user = $_POST['username'];
    $pass = $_POST['mdp'];
    if (is_file('admins.txt')) {
        $userAndPassword = array();
        $verification = file('admins.txt');
        $userLength = 0;
        $userAndPasswordOk = false;
        echo '2eme etape';
        foreach ($verification as $key => $value) {
            $userAndPassword[$key] = explode('|', $value);
            $userLength++;

        }

        for ($i = 0; $i < $userLength; $i++) {
             // i = indice pour trouve le combo utilisateur/mdp
            //  0 ou 1 pour trouver dans le combo utilisateur/mdp la valeur du user ou du mdp
            echo ' boucle for ... </br>';
            echo ' ' . $userAndPassword[$i][0] . '</br>';
            echo ' ' . $userAndPassword[$i][1] . '</br>';

            if ($user == $userAndPassword[$i][0] && $pass == $userAndPassword[$i][1]) {
                echo ' utilisateur trouve';


            }
        }


    }
}

else
{

}
