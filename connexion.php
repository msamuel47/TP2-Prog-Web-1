<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin connect</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

</head>
<body>
<div id="login">
    <form id="login" action="validerUtilisateur.php" method="post">
        <table>
            <tr>
                <td><label>Nom d'utilisateur :</label></td>
                <td><input type="text" name="username"/></td>
                <?php

                ?>
            </tr>
            <tr>
                <td><label>Mot de passe :</label></td>
                <td> <input type="password" name="mdp" /></td>
            </tr>
        </table>
        <input type="submit"  value="connexion"/>

    </form>
    <?php

    if (isset($_GET['error']))
    {

        if($_GET['error'] == 0)
        {
            echo '<p class="errormessagelol">Votre nom d\'utilisateur est manquant</p>';
        }
        if($_GET['error'] == 1)
        {
            echo '<p class="errormessagelol">Votre mot de passe est manquant</p>';
        }
        if($_GET['error'] == 2)
        {
            echo '<p class="errormessagelol">Votre nom d\'utilisateur est manquant</p></br>
<p class="errormessagelol">Votre mot de passe est manquant</p>';
        }


    }
    ?>
</div>
</body>