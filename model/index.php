<?php
include('../vue/header.php');

include('../controller/controller.php');






while ($donnees = $reponse->fetch())
{
    $id = htmlspecialchars($donnees['id']);
    $title = htmlspecialchars($donnees['title']);
	$description = htmlspecialchars($donnees['description']);
	$dateFin = htmlspecialchars($donnees['dateFin']);

	include('../vue/oneProject.php');


}









include('../vue/newProject.php');
include('../vue/footer.php');




