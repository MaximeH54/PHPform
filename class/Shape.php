<?php

abstract class Shape
{
  const UNIT = "cm";

  abstract public function perimeter();
  abstract public function area();

  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function displayPerimeter($unit='cm')
  {
    if($unit === 'mm') {
      $perimeters = $this->perimeterToMm();
    } else {
      $perimeters = $this->perimeter();
    }

    echo "Le périmétre du " . $this->name . " est de " . $this->perimeter() . ' ' . self::UNIT;
  }

  public function displayArea($unit='cm')
  {
    if($unit === 'mm') {
      $areas = $this->areaToMm();
    } else {
      $areas = $this->area();
    }
    echo "Le " . $this->name . " a une aire de " . $this->area() . ' ' . self::UNIT . "²";
  }

  public function areaToMm()
  {
    return $this->area() * 10;
  }

  public function perimeterToMm()
  {
    return $this->perimeter() * 10;
  }
}

 ?>
