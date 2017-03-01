<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-01
 * Time: 2:53 PM
 */
echo "

<div id=\"login\">  
    <form action=\"validerUtilisateur.php\" method=\"post\">
                        <table>
                        <tr>
                            <td><label>Nom d'utilisateu</label></td>
                            <td><input type=\"text\" name=\"username\"/></td>
                        </tr>
                        <tr>
                            <td><label>Mot de passe</label></td>
                            <td> <input type=\"password\" name=\"mdp\" /></td>
                        </tr>
                        </table>                        
    </form>
</div>     
                        ";
?>