<?php

// Below we declare a class named Fruit consisting of two properties ($name and $color) and two methods set_name() and get_name() for setting and getting the $name property:

class Fruit {
  // properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this -> name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
// $banana = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
// $banana->set_name("Banana");

// echo "Name: " . $apple->get_name();
// echo PHP_EOL;
// echo $banana->get_name();
// echo "Color: " . $apple->get_color();
// echo PHP_EOL;

// php - the $this keyword
// 1. inside the class (by adding a set_name() method and use $this):

class Fruits {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}

$apple = new Fruits();
$apple->set_name("Apple");

echo $apple->name;
$apple = new Fruit();
var_dump($apple instanceof Fruit);