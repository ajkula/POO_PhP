<?php


interface IOperation {
    public function calculer($operande, $resultat);
}

/**
 * Description of Calculatrice
 *
 * @author formation
 */
class Calculatrice {
    
    /**
     *
     * @var int 
     */
    private $resultat = 0;
    
    /**
     *
     * @var int 
     */
    private $operande = 0;
    
    /**
     *
     * @var IOperation 
     */
    private $operation;
    
    public function getResultat() {
        return $this->resultat;
    }

    public function getOperande() {
        return $this->operande;
    }

    public function getOperation() {
        return $this->operation;
    }

    public function setResultat($resultat) {
        $this->resultat = $resultat;
        return $this;
    }

    public function setOperande($operande) {
        $this->operande = $operande;
        return $this;
    }

    public function setOperation(IOperation $operation) {
        $this->operation = $operation;
        return $this;
    }
    
    public function egal(){
        $this->resultat = $this->operation->calculer($this->operande, $this->resultat);
    }
}

class Addition implements IOperation {
    
    public function calculer($operande, $resultat) {
        return $resultat + $operande;
    }

}

class Soustraction implements IOperation {
    
    public function calculer($operande, $resultat) {
        return $resultat - $operande;
    }

}