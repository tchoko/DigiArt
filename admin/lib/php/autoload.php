<?php

function autoload($nom_classe){

	if(file_exists('./lib/php/classes/'.$nom_classe.'.class.php')){
		
		require  './lib/php/classes/'.$nom_classe.'.class.php';
		
	}
	else if(file_exists('./admin/lib/php/classes/'.$nom_classe.'.class.php')){
		
		require  './admin/lib/php/classes/'.$nom_classe.'.class.php';
		
	}
	else {
		
		print "Aucune classe chargée: ".$nom_classe;
	}
}	
	spl_autoload_register('autoload');