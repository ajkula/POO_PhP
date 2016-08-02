<?php

require './Calculatrice.php';

$calc = new Calculatrice();

$calc   ->setResultat(5)
        ->setOperande(2)
        ->setOperation(new Addition()
);
$calc->egal();

echo $calc->getResultat()."<br>";

$calc->egal();

echo $calc->getResultat()."<br>";

$calc->setOperation(new Soustraction());

$calc->egal();

echo $calc->getResultat()."<br>";