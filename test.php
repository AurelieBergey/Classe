<?php

require 'Class_crepe.php';

$variable = new Crepe(500,1,5,5,1,50,5,80,"nutella");
var_dump($variable);

$variable->Afficher_recette();
echo $variable->getRhum();

?>