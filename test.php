<?php

require 'Class_crepe.php';

$variable = new Crepe(500,1,5,5,1,50,5,80,["nutella"]);
    var_dump($variable);

$variable->Afficher_recette();
    echo $variable->getRhum();

$variable->setRhum("Caramel");

    echo $variable->getRhum();


$variable->topping("Vanille");
$variable->topping("Caramel");

    var_dump($variable);

$variable->delete("Vanille");
    var_dump($variable);

?>