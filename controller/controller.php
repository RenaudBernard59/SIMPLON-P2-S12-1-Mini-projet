<?php

//////////////////BDD CONNECTION///////////////////
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projets;charset=utf8', 'projetsusers', 'monmotdepasse');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

///////////////////BDD CONNECTION///////////////////

//TAB selection
$tabProjets = $bdd->query('SELECT * FROM Projets');

//TAB lines counter
$nbProjects = $bdd->query('SELECT COUNT(*) FROM Projets');

while ($donnees = $tabProjets->fetch())
{ 
	return $donneesBase = $donnees;
}

while ($donnees = $nbProjects->fetch())
{ 
	return $nbRetourner = $donnees;
}

/*END Controller*/
