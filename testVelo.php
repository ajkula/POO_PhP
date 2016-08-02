<?php

require './classes/Vehicule.php';
require './classes/Velo.php';

$monVelo = new Velo();

echo $monVelo->getPositionX();

$monVelo->avancer();

echo $monVelo->getPositionX();

$monVelo->affichePosition();