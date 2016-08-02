<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicule
 *
 * @author formation
 */
abstract class Vehicule {

    protected $positionX = 0;
    
    public function __construct($positionX) {
        $this->positionX = $positionX;
    }
    
    public function avancer(){
        $this->positionX += 1;
    }
    public function getPositionX() {
        return $this->positionX;
    }

    public function setPositionX($positionX) {
        $this->positionX = $positionX;
    }

    abstract public function reculer();
}
