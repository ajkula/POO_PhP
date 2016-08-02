<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Interrupteur
 *
 * @author formation
 */
class Interrupteur {
    
    private $devices = [];
    
    public function connect(Iswitchable $device) {
        array_push($this->devices, $device);
//        $this->device = [];
    }
    
    public function turnOn() {
        foreach ($this->devices as $device){
        $device->turnOn();
        $device->getStatus();
        }
    }
    
    public function turnOff() {
        foreach ($this->devices as $device){
        $device->turnOff();
        $device->getStatus();
        }
    }
    
}
