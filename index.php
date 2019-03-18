<!doctype html>
<?php
	require './admin/lib/php/admin_liste_include.php';
	$cnx = Connexion::getInstance($dsn,$user,$pass);
	//var_dump($cnx);
	
	$fl = new AccueilDB($cnx);
	//var_dump($fl);
	$liste = $fl->getTexteAccueil();
	print " Nom de la fleur: ".$liste[0]->nom_fleur." Prix: ".$liste[0]->prix_fleur." euros";
	//var_dump($liste);
?>
<html>
	<head>
		<meta charset = "UTF-8">
		<title></title>
	</head>
	<body>
		<?php
		
		
		?>
	</body>
</html>