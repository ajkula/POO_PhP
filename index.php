<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './classes/Voiture.php';

        $maVoiture = new Voiture('orange', 'skoda', 'Fabia', 5, 40);

        $maVoiture->setCouleur('noir');
        var_dump($maVoiture);
        $maVoiture->setQtCarburant(2);

        $maVoiture->voyager(2000);
        ?>
    </body>
</html>
