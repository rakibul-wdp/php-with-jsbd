<?php 

// Inheritance in OOP = When a class derives from another class.

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}";
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or berry?";
//   }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();

// PHP - Inheritance and the Protected Access Modifier

class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}";
  }
}

// PHP - Overriding Inherited Methods
class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight)
  {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry -> intro();

// class Strawberry extends Fruit {
//   public function message() {
//     echo "am i a fruit or a berry";
//     // call protected method from within derived call - OK
//     $this -> intro();
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->messge(); // OK. message() is public and it calls intro() (which is protected) from within the derived class.