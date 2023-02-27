<?php

/*

PHP - What are Abstract Classes and Methods?
abstract classes and methods are when the parent class has named method, but need its child class(es) to fill out the tasks.
An abstract class or method is defined with the abstract keyword:

*/

abstract class ParentClass {
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3() : string;
}