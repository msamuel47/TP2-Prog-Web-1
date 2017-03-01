<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2017-03-01
 * Time: 8:37 AM
 */


//Validation de la form
if( !empty($_POST['nomEvent']) && !empty($_POST['date']) && !empty($_POST['city'])
    && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['game']) )
{
  EnregistrerLaForm();
}
else
{
    echo'<di';
}

function EnregistrerLaForm()
{

}

?>