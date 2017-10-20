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
$reponse = $bdd->query('SELECT * FROM Projets');

while ($donnees = $reponse->fetch())
{
    $id = htmlspecialchars($donnees['id']);
    $title = htmlspecialchars($donnees['title']);
	$description = htmlspecialchars($donnees['description']);
	$dateFin = htmlspecialchars($donnees['dateFin']);
}


/*END Controller*/
