<?php
/**
 * [Car - dit is een abstract parent class]
 */
abstract class Car {
    /**
     * [CarEngine]
     *
     * @param   [type]  $name  [$name description]
     *
     * @return  [string]         [return description]
     */
  abstract protected function CarEngine($name);
}
/**
 * [engine - dit is een childclass]
 */
class engine extends Car {
  public function CarEngine($name, $separator = "vette", $greet = "een") {
      /**
       * [$name]
       *
       * @var [string]
       */
    if ($name == "Ford") {
        /**
         * [$prefix]
         *
         * @var [string]
         */
      $prefix = "dikke";
    } elseif ($name == "Volvo") {
      $prefix = "skeere";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}
/**
 * [bands ook dit is een childclass]
 */
class bands extends Car {
    public function CarEngine($name, $separator = "profiel", $greet = "een") {
        /**
         * [$name]
         *
         * @var [string]
         */
      if ($name == "Ford") {
          /**
           * [$prefix]
           *
           * @var [string]
           */
        $prefix = "goed";
      } elseif ($name == "Volvo") {
        $prefix = "slecht";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }
?>