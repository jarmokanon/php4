<?php
class Driehoek extends Figuur {
    /**
     * 
     * 
     */

    public function __construct( float $Ib,  float $Ih)
    {
        parent::__construct($Ib, $Ih);
    }
   

    public function getB() {
        return $this->x;
    }
    public function getH(){
        return $this->y;
    }
    public function berekenoppervlakte() {
        // $opp = (2 * Figuur::$PI * $this->getH() * $this->getH()) + (2 * Figuur::$PI * $this->getH() * $this->getB()) / 2;
        // return $opp;

        $opp = ($this->getB() * $this->getH()) / 2;

        // 10 x 5 = 50
        // 50 : 2 = 25 cm2
       
        return $opp;
    }

}

?>