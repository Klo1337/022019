<?php
require('./classes/Animal.php');
require('./classes/Chiken.php');
require('./classes/Cow.php');
require('./classes/Barn.php');

$Barn = new Barn();

for ($i=0; $i < 10; $i++) { 
    $Barn->addAnimal(new Cow($Barn->getUniqId()));
}

for ($i=0; $i < 20; $i++) { 
    $Barn->addAnimal(new Chiken($Barn->getUniqId()));
}

$Production = $Barn->collect();

printf('Barn production - eggs: %d , milk: %d', $Production['eggs'], $Production['milk']);