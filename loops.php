<?php

// $x = 6;

// do {
//   echo "the number is: $x";
//   $x++;
// } while ($x <=5);

// while ($x <= 5) {
//   echo "the number is: $x";
//   $x++;
// }

// while ($x <= 100) {
//   echo "the number is: $x";
//   $x += 10;
// }

// for ($x = 0; $x <= 10; $x++) {
//   echo "the number is: $x";
// }

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $value) {
//   echo $value;
// }

// $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

// foreach($age as $x => $val) {
//   echo $x = $val;
// }

// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     // break;
//     continue;
//   }
//   echo "the number is: $x";
// }

$x = 0;

// while($x < 10) {
//   if ($x == 4) {
//     break;
//   }
//   echo "the number is: $x";
//   $x++;
// }

while ($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "the number is: $x";
  $x++;
}