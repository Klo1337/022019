<?php
require('./classes/Animal.php');
require('./classes/Chicken.php');
require('./classes/Cow.php');
require('./classes/Barn.php');

$Barn = new Barn();

for ($i=0; $i < 10; $i++) { 
    $Barn->addAnimal(new Cow($Barn->getUniqId()));
}

for ($i=0; $i < 20; $i++) { 
    $Barn->addAnimal(new Chicken($Barn->getUniqId()));
}

$Production = $Barn->collect();

foreach($Production as $product => $count){
    printf('%s : %d |', $product, $count);
}