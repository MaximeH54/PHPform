<?php

class Square extends Shape
{
  const NB_SIDE = 4;

  private $side; // Size $side

  public function __construct($side, $name)
  {
    $this->side = $side;
    parent:: __construct($name);
  }

  public function perimeter()
  {  //methode calcul perimetre
    return $this->side * self::NB_SIDE;   // ou return $this->side * 4;
  }

  public function area()
  {
    return $this->side * $this->side;
  }  
}

?>
