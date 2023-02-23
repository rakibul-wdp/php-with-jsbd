<?php

// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color)
//   {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple->get_name();
// echo PHP_EOL;
// echo $apple->get_color();
// echo PHP_EOL;

class Fruit {
  public $name;
  public $color;

  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}";
  }
}

$apple = new Fruit("Apple", "red");