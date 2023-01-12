<?php

// interfaces allow you to specify what methods a class should implement. interfaces are declared with the interface keyword.

interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}