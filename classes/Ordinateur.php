<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ordinateur
 *
 * @author formation
 */
class Ordinateur implements Iswitchable {

    private $status = FALSE;

    public function getStatus() {
        if($this->status){
            echo '<p>je m allume tranquilou</p>';
        }  else {
            echo '<p>je m eteint grace a mon onduleur</p>';    
        }
    }

    public function turnOff() {
        $this->status = FALSE;
    }

    public function turnOn() {
        $this->status=TRUE;
    }

}
