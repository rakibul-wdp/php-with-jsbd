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

// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color)
//   {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function __destruct()
//   {
//     echo "The fruit is {$this->name} and the color is {$this->color}";
//   }
// }

// $apple = new Fruit("Apple", "red");

// PHP OOP - Access Modifiers

// class Fruit{
//   public $name;
//   protected $color;
//   private $weight;
// }

// $mango = new Fruit();
// $mango->name = "Mango"; // OK
// $mango->color = "Yellow"; // ERROR
// $mango->weight = "300"; // ERROR

class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) { // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name("Mango");
$mango->set_color("Yellow");
$mango->set_wight("300");