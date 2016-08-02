<?php

require './classes/IDAO.php';
require './classes/ClientDAO.php';
require './classes/ClientDTO.php';

$pdo = new PDO(
        'mysql:host=localhost;dbname=chapitre;charset=utf8', 'root', '', ['ATTR_ERRMODE' => PDO::ERRMODE_EXCEPTION]
);

$dao = new ClientDAO($pdo);




$dtoClient = new ClientDTO();

$dtoClient->setNom("les huitres")
        ->setEmail("popo@areuuuuh.fr")
        ->setMotDePasse("azer");

var_dump($dao->save($dtoClient));

var_dump($dao->findAll());

$dtoClient->setClientID(12)->setMotDePasse("baaaaaaaah");
var_dump($dao->save($dtoClient));