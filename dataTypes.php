<?php


/**
 * Php data-types 
 * String
 * Integer
 * Float
 * Boolean
 * Null
 * Object
 * Array
 */

//String :- Sequence of characters.
$name = "Sambhava";
$firend = 'Aman';

echo "Name is $name firend is $firend <br/>";

//Integer :- Non decimal number.
$income = 100;

echo "my income is $income";
echo "<br/>";

//Float :- Decimal number.
$income = 33.50;
$debts = -45.5;


// Var_dump() function is print variable types and values; 
echo var_dump($income);
echo "<br/>";
echo $debts;
echo "<br/>";

//Boolean :- Can be either true or false.
$x = true;
$y = false;

echo $x;
echo "<br />";
echo var_dump($y);
echo "<br/>";

//Object :- Instances of classes.
//Employee is a class ----> sambhava can be one object

//Array :- Used to store multiple values in a single variable.
$firends=array("Rohan", "Subham", "Aman","Larry");
echo var_dump($firends);
echo "<br />";
echo var_dump($firends[2]);
echo "<br />";
echo $firends[0];
echo "<br />";
echo $firends[1];
echo "<br />";

//Null
$name=null;

echo var_dump($name);

?>