<?php

require './classes/Iswitchable.php';
require './classes/Lampe.php';
require './classes/Ordinateur.php';
require './classes/Interrupteur.php';

$switcher = new Interrupteur();

$switcher->connect(new Lampe());
$switcher->connect(new Ordinateur());

$switcher->turnOn();
