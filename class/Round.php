<?php

class Round extends Shape
{

  private $ray;

  public function __construct($ray, $name)
  {
    $this->ray = $ray;
    parent:: __construct($name);
  }

  public function perimeter()
  {
    return $this->ray * 2 * pi();
  }

  public function area()
  {
    return ($this->ray * $this->ray) * pi();
  }
}
