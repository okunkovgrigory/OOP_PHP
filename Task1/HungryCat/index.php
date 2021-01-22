<?php

require_once 'classes/HungryCat.php';

$hungryCatMolly = new HungryCat('Molly', 'brown', 'tuna');

$hungryCatMolly->eat('sausage');
$hungryCatMolly->eat('pork');
$hungryCatMolly->eat('tuna');
$hungryCatMolly->eat('beef');
$hungryCatMolly->eat('fish');

$hungryCatRosie = new HungryCat('Rosie', 'white', 'beef');

$hungryCatRosie->eat('sausage');
$hungryCatRosie->eat('pork');
$hungryCatRosie->eat('tuna');
$hungryCatRosie->eat('beef');
$hungryCatRosie->eat('fish');
