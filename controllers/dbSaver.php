<?php

require('dbaccess.php');

//TAB selection for save
$requette = $bdd->prepare('INSERT INTO Projets (title, description, dateFin) VALUES(?, ?, ?)');

$_POST['title'];
$_POST['description'];
$_POST['dateFin'];
$_POST['NOW'];



