<?php

require('dbAccess.php');



//TAB selection for getter
$reponse = $bdd->query('SELECT * FROM Projets ORDER BY ID');




