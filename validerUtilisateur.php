<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-01
 * Time: 3:00 PM
 */
session_start();
if (!empty($_POST['username']) && !empty($_POST['mdp'])) {

    $user = $_POST['username'];
    $pass = $_POST['mdp'];
    if (is_file('admins.txt')) {
        $userAndPassword = array();
        $verification = file('admins.txt');
        $userLength = 0;
        $userAndPasswordOk = false;

        foreach ($verification as $key => $value) {
            $userAndPassword[$key] = explode('|', $value);


            $userLength++;

        }
var_dump($user);

        for ($i = 0; $i < $userLength; $i++) {
             // i = indice pour trouve le combo utilisateur/mdp
            //  0 ou 1 pour trouver dans le combo utilisateur/mdp la valeur du user ou du mdp
            echo ' boucle for ... </br>';
            echo ' ' . $userAndPassword[$i][0] . '</br>';
            echo ' ' . $userAndPassword[$i][1] . '</br>';

            if ($user == trim($userAndPassword[$i][0]) && $pass ==  trim($userAndPassword[$i][1]))
            {
                var_dump($user);
                var_dump($pass);
                $_SESSION['user'] = $user;
                $userAndPasswordOk = true;
            }
        }


    }
    if($userAndPasswordOk = true)
    {
        var_dump($userAndPasswordOk);
        var_dump($_SESSION['user']);
        header('Location: index.php');
    }

}
// Section de gestion des codes d'erreur
else
{
    // Code 0 = username manquant
    if (empty($_POST['username']))
    {
        header('Location:connexion.php?error=0');
    }
    // Code 1 = mot de passe manquant
    if (empty($_POST['mdp']) && !empty($_POST['username']))
    {
        header('Location:connexion.php?error=1');
    }
    // Code 2 = mot de passe et nom d'utilisateur manquant
    if (empty($_POST['mdp']) && empty($_POST['username']))
    {
        header('Location:connexion.php?error=2');
    }

}
