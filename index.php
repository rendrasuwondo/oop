<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");

// var_dump($sheep);

echo "<h1>Release 0</h1>";
echo $sheep->get_name(); // "shaun"
echo "<br>" . $sheep->legs; // 2
echo "<br>" . $sheep->cold_blooded; // false

echo "<hr>";
echo "<h1>Release 1</h1>";
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
