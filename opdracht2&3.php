<?php
/**
 * src/opdracht2.php
 * [Car description]
 */
class Car {
  /**
   * [$motor]
   *
   * @var [string]
   */
  public $motor;
  /**
   * [$color]
   *
   * @var [string]
   */
  public $color;
  /**
   * [$bands]
   *
   * @var [string]
   */
  public $bands;
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