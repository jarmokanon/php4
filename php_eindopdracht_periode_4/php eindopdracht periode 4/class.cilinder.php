<?php
class Cilinder extends Figuur {
    /**
     * 
     * 
     */

    public function __construct( float $Ih,  float $Ir)
    {
        parent::__construct($Ih, $Ir);
    }
   

    public function getH() {
        return $this->x;
    }
    public function getR(){
        return $this->y;
    }
    public function berekenoppervlakte() {
        $opp = (2 * Figuur::$PI * $this->getR() * $this->getR()) + (2 * Figuur::$PI * $this->getR() * $this->getH());
        // in de feedback video deed u getR en getH bij de bovenstaande regel omdraaien, maar ik denk dat deze beter is??????
        return $opp;
    }

}

?>