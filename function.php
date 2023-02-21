<?php declare(strict_types = 1);

// function writeMsg() {
//   echo "Hello World!";
// }

// writeMsg();

// function familyName($fname, $year) {
//   echo "$fname $year";
// }
// familyName("Jani", "1978");
// familyName("Hege", "2932");
// familyName("Stale", "2912");

// function addNumber(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumber(5, "5 days");

function setHeight(int $min_height = 50) {
  echo "the height is: $min_height";
}

setHeight(350);
setHeight();
setHeight(135);