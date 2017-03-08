<?php

echo $_POST["nom"];
$resulatRecherche = [];
session_start();
if(is_file("tournois.txt"))
{
	$tableauTournois = file('tournois.txt');
	
	$tournoisAVerifier = [];
	foreach($tableauTournois as $index => $value)
	{
		$tournoisAVerifier[$index] = explode('|' , $value);
	}
	
	$c=0;
	for($i = 0 ; $i < count($tournoisAVerifier) ; $i++)
	{
		
		if($tournoisAVerifier[$i][0] ==  $_POST['nom'])
		{
		$tournoiresultat[$c]=$tournoisAVerifier[$i];
		
		$c++;
		}
	}
	$_SESSION['array'] = $tournoiresultat;
	if(isset($resulatRecherche))
	{
		header('Location:resulatRecherche.php');
	}
}
else
{
	
}

?>