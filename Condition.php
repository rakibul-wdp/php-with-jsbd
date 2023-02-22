<?php

// $t = date("H");
// echo $t;

// if ($t < "20") {
//   echo "Have a good day";
// }

// $t = 25;

// if ($t < "20") {
//   echo "have a good day!";
// } elseif ($t > 20) {
//   echo "print elseif condition";
// }else {
//   echo "Have a good night";
// }

// $fav_color = "green";

// switch ($fav_color) {
//   case "red":
//     echo "your fav color is red";
//     break;
//   case "blue":
//     echo "your fav color is blue";
//     break;
//   case "green":
//     echo "your fav color is green";
//     break;
//   default:
//     echo "your don't have fav color";
// }


// $a = 20;
// $b = 100;
// $c = 20;

// if ($a == $b) {
//   echo "A si equal to B";
// } elseif ($a > $b) {
//   echo "A is greater than B";
// } elseif ($a < $b) {
//   echo "A is less than B";
// }

// if ($a == $c && $a > $b) {
//   echo "hello world";
// } else {
//   echo "Jani na";
// }

$num1 = 26;
$num2 = 10;

if ($num1 > $num2) {
  if ($num1 > 50) {
    echo "yes, true";
  } elseif ($num1 < 30) {
    if ($num1 == 25) {
      echo "it's 25";
    } else {
      echo "no, it's not";
    }
  } elseif ($num1 < 45) {
    echo "Yes, less than 45";
  }else {
    echo "No, false";
  }
}