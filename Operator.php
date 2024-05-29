<?php
/*
Operators in PHP
Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators
*/

$a = 22;
$b = 5;
$mins = $a - $b;
$add = $a + $b;
$mult = $a * $b;
$divide = $a / $b;
$modulus = $a % $b;
$power = $a ** $b;


echo $mins . "<br />";
echo $add . "<br />";
echo $mult . "<br />";
echo $divide . "<br />";
echo $modulus . "<br />";
echo "For a ** b result is = " . $power . "<br />";

//Assignments Operators
$x = $a;
echo $a . "<br />";
echo "For x, the value is " . $x . "<br />";

$a += 6;
echo "For a, the value is " . $a . "<br />";

// Comparison Operators
$x = 7;
$y = 2;

echo "For x==y, the result is ";
echo var_dump($x == $y);
echo "<br />";

echo var_dump($x > $y);
echo "<br />";

echo var_dump($x < $y);
echo "<br />";

//Not equal to operator
echo var_dump($x <> $y);
echo "<br />";

//Logical Operators
$m=true;
$n=false;

//Logical && operator (and or && are same   )
echo "For m and n, the result is ";
echo var_dump($m && $n);
echo "<br />";

//Logical || operator (and or && are same   )
echo "For m and n, the result is ";
echo var_dump($m or $n);
echo "<br />";

?>