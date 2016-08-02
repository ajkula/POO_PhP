<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Velo
 *
 * @author formation
 */
class Velo extends Vehicule{
    private $nbRoues = 2;
    
    public function __construct($position = 0) {
        parent::__construct($positionX);
    }
    
    public function affichePosition(){
        echo "je sui  a la pos : ". $this->positionX;
    }
    
    public function reculer() {
//        $this->positionX -= 1;
        echo 'Un velo ne recule pas';
    }

}
