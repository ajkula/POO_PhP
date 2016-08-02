<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lampe
 *
 * @author formation
 */
class Lampe implements Iswitchable {
    private $status = FALSE;
    public function getStatus() {
        if($this->status){
            echo '<p>je suis allumé</p>';
        }  else {
            echo '<p>il fait noir, eteinte!</p>';    
        }
    }

    public function turnOff() {
         $this->status = FALSE;
    }

    public function turnOn() {
         $this->status = TRUE;
    }

//put your code here
}
