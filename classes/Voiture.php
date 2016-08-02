<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Voiture
 *
 * @author formation
 */
class Voiture {

    /**
     * la couleur de la voiture
     * @var string
     */
    private $couleur;

    /**
     * 
     * @var string
     */
    private $constructeur;
    private $consommation;
    private $kilometrage = 0;
    private $capaciteeReservoir;
    private $qtCarburant;
    private $nuancier = [];

    /**
     *
     * @var string
     */
    private $model;

    public function __construct($couleur, $constructeur, $model, $consommation, $capaciteeReservoir) {
        $this->couleur = $couleur;
        $this->constructeur = $constructeur;
        $this->model = $model;
        $this->consommation = $consommation;
        $this->qtCarburant = 0;
        $this->capaciteeReservoir = $capaciteeReservoir;
        $this->nuancier = [
            'rouge',
            'orange',
            'grise',
            'noir'
        ];
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getConstructeur() {
        return $this->constructeur;
    }

    public function getConsommation() {
        return $this->consommation;
    }

    public function getCapaciteeReservoir() {
        return $this->capaciteeReservoir;
    }

    public function getQtCarburant() {
        return $this->qtCarburant;
    }

    public function setConsommation($consommation) {
        $this->consommation = $consommation;
    }

    public function setCapaciteeReservoir($capaciteeReservoir) {
        $this->capaciteeReservoir = $capaciteeReservoir;
    }

    public function setQtCarburant($qtCarburant) {
        $this->qtCarburant = $qtCarburant;
    }

    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function setCouleur($couleur) {
        if (in_array($couleur, $this->nuancier)) {

            $this->couleur = $couleur;
        } else {
            throw new InvalidArgumentException("couleur non dispo!");
        }
    }

    public function setConstructeur($constructeur) {
        $this->constructeur = $constructeur;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getNom() {
        $nom = '';
        $nom = "<p>votre voiture est une : {$this->constructeur} de couleur {$this->couleur} "
                . "et le model est {$this->model},"
                . " capa reserv : {$this->capaciteeReservoir}, conso : {$this->consommation}, QT carbu : {$this->qtCarburant}, KM : {$this->kilometrage}</p>";
        return $nom;
    }

    public function __toString() {
        return $this->getNom();
    }

    public function faireLePlein() {
        $this->qtCarburant = $this->capaciteeReservoir;
    }

    public function voyager($distance) {
        $consoVoyage = $distance / $this->consommation;
        $rayonAction = $this->getRayonAction();
        $distanceParcourue = 0;

        if ($consoVoyage > $this->qtCarburant) {
            echo "<p>Il faudra faire le plein en route</p>";
        } else {
            echo "<p>j'ai assez de carbu pour le voyage</p>";
        }

        while ($distanceParcourue < $distance) {
            $resteAParcourir = $distance - $distanceParcourue;
            if ($resteAParcourir > $rayonAction) {
                $this->rouler($rayonAction);
                $distanceParcourue += $rayonAction;
            } else {
                $this->rouler($resteAParcourir);
                $distanceParcourue += $resteAParcourir;
            }



            if ($this->qtCarburant == 0) {
                $this->faireLePlein();
                $rayonAction = $this->getRayonAction();
            }
        }
    }

    public function distanceMax() {
        $distance = ($this->qtCarburant / $this->consommation) * 100;
        $distanceMAX = "<p>distance max que vous pouvez parcourir : $distance</p>";
        return $distanceMAX;
    }

    private function rouler($distance) {
        echo "<p>je roule $distance Km</p>";
        // Conso carburant
        $this->qtCarburant -= ($distance / 100 * $this->consommation);
        $this->kilometrage += $distance;
    }

    private function getRayonAction() {
        return ($this->qtCarburant / $this->consommation) * 100;
    }

}
