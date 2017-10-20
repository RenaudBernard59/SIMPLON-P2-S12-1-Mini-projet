<?php

//Exécution du formulaire d'entrée


$requette->execute(array($_POST['title'], $_POST['description'], $_POST['dateFin']));


// Affichage d'erreur en cas de problème de donnée
