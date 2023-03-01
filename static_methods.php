<?php

// PHP - Static Methods
// Static methods can be called directly - without creating an instance of the class first. It's declared with the static keyword.

// syntax
class ClassName {
  public static function staticMethod() {
    echo "Hello PHP";
  }
}

class greeting {
  public static function welcome() {
    echo "hello world";
  }

  public function __construct()
  {
    self::welcome();
  }
}

new greeting();

class domain {
  protected static function getWebsiteName() {
    return "example.com";
  }
}

class domainExam extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainExam = new domainExam;
echo $domainExam -> websiteName;