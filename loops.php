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

// $x = 0;

// while($x < 10) {
//   if ($x == 4) {
//     break;
//   }
//   echo "the number is: $x";
//   $x++;
// }

// while ($x < 10) {
//   if ($x == 4) {
//     $x++;
//     continue;
//   }
//   echo "the number is: $x";
//   $x++;
// }

// for, while, do while, foreach

// $num = 1;

// while ($num <= 20) {
//   if ($num % 2 == 0 && $num % 5 == 0) {
//     echo $num;
//     echo PHP_EOL;
//   }
//   $num++;
// }

// $num = 100;

// while($num < 10) {
//   echo $num;
//   echo PHP_EOL;
//   $num++;
// }

// do {
//   echo $num;
//   echo PHP_EOL;
//   $num++;
// } while ($num < 10);

// Init counter
// Test counter
// Increment counter

// $num = 1; // Init counter

// while ($num < 10) {
//   echo $num;
//   echo PHP_EOL;
//   $num++;
// }

// for ($num = 10; $num >= 1; $num--) {
//   echo $num;
//   echo "\n";
// }

// $names = ["Abul", "Babul", "Cabul", "Dabul", "Ebul"];

// foreach ($names as $name) {
//   echo $name;
//   echo "\n";
// }

// $names = [
//   "name" => "Omok",
//   "age" => 22,
//   "hairColor" => "black",
// ];

// foreach ($names as $key => $value) {
//   echo $key, $value;
//   echo PHP_EOL;
// }

// for ($i = 1; $i < 15; $i++) {
//   for ($j = 0; $j < $i; $j++) {
//     echo "*";
//   }
//   echo PHP_EOL;
// }

// break
// for ($i = 1; $i < 100; $i++) {
//   if ($i % 13 == 0) break;
  
//   echo $i;
//   echo "\n";
// }

// continue

for ($i = 1; $i < 10; $i++) {
  if($i == 3 || $i == 5 || $i == 7) continue;
  echo $i;
  echo "\n";
}