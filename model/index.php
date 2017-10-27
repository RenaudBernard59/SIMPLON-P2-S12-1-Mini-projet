<?php
//Affichage de la page
require('../views/header.php');

require('../controllers/dbGetter.php');

while ($donnees = $reponse->fetch())
{
    $id = htmlspecialchars($donnees['id']);
    $title = htmlspecialchars($donnees['title']);
	$description = htmlspecialchars($donnees['description']);
	$dateFin = htmlspecialchars($donnees['dateFin']);
	include('../views/oneProject.php');
}

require('../views/newProject.php');
require('../views/footer.php');
















