<?php

echo $_POST["nom"];
if(is_file("tournois.txt")){
	$tableauTournois = file('tournois.txt');
	
	$tournoisAVerifier = [];
	foreach($tableauTournois as $index => $value){
		$tournoisAVerifier[$index] = explode('|' , $value);
	}
	var_dump($tournoisAVerifier);
	for($i = 0 ; $i < count($tournoisAVerifier) ; $i++){
		if(tournoisAVerifier[$i][0] ==  $_POST['nom']){
			header()
		}
	}
}
else{
	
}

?>