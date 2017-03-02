<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-01
 * Time: 3:00 PM
 */

if (!empty($_POST['username']) && !empty($_POST['mdp']))
{
    if (is_file('admin.txt'))
    {
        $adminValidation = fopen('admin.txt' , 'r');
       $verification = file($adminValidation);
       foreach($verification as $jaggedArray)
       {
           $userAndPassword = array(explode('|' , $jaggedArray));
       }
       foreach($userAndPassword as $user => $password)
       {
           if($user == $_POST['username'])
           {
                if($password == $_POST['mdp'])
                {
                    session_start();
                    $_SESSION['user'] = $_POST['username'];
                }
           }
           else
               {

               }
       }



    }
}
else
{

}
