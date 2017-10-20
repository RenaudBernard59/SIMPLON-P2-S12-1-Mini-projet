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




