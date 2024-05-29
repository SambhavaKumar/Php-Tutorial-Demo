<?php
echo "Welcome to scope and local and global variables in php"."<br />";
$a=98; //Global variable
$b=10;
function printValue() {
 //   $a=97; //Local variable
 global $a, $b; //Give me the access to this global variable.
 $a=100;
 $b=1000;
    echo "The value of your variable is $a and $b" . "<br />";
}


printValue();
echo "The value of your variable is $a and $b";
echo "<br />";
echo $GLOBALS["a"];
echo "<br/>";
echo $GLOBALS["b"];

?>