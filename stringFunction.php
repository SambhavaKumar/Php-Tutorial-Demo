<?php
$name = "Sambhava kumar";

echo $name;
echo "<br />";

// strlen() is return string var length.
echo strlen($name);
echo "<br />";

//concatenate strings.
echo "The length of the myString is " . strlen($name);
echo "<br />";
echo str_word_count($name);
echo "<br />";
echo strrev($name);
echo "<br />";
echo strpos($name, "k");
echo "<br />";
echo str_replace("Sambhava", "Amit", $name);
echo "<br/>";
echo str_repeat($name, 4);
echo "<br/>";
echo "<pre>";
echo rtrim("    This is a good boy   ");
echo "<br/>";
echo ltrim("    This is a good boy   ");
echo "</pre>";
echo "<br/>";
//Add addcslashes
$str = addcslashes("Sambhava kumar", "k");
echo $str . "<br/>";

//The chop() function removes whitespaces or other predefined characters from the right end of a string.
echo $name . "<br/>";
echo chop($name, "kumar") . "<br/>";

//Return characters from different ASCII values:
//Using the octal value 046 to add the ASCII Character: &.

$str1 = chr(046);
echo ("you $str1 me forever!")."<br/>";

//The chunk_split() function splits a string into a series of smaller parts.
//Note: This function does not alter the original string.
echo chunk_split($name, "1","_")."<br/>";

echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`") . "<br/>";

echo $name."<br/>";
echo count_chars($name, "3")

?>