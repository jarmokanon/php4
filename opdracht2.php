<?php
class Car {
  public $motor, $color, $bands;
  function getInfo() {
    return "This Car has an $this->motor motor and his color is $this->color.";
  }
}

$detail = new Car();
$detail->color = "blue";
$detail->motor = "V12";
echo $detail->getInfo();

?>
<!-- opdracht 2 van jarmo 1wdv1 -->