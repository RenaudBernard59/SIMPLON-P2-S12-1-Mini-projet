<?php

require('dbSaver.php');

//TAB selection for save
$requette = $bdd->prepare('INSERT INTO Projets (title, description, dateFin) VALUES(?, ?, ?)');



