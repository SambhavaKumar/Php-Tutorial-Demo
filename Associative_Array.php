<?php
//These are called indexed Array
$arr = array("test", "test1", "test2", "test3");
echo "$arr[0]" . "<br />";
echo "$arr[1]" . "<br/>";

//These are called Associtative array.
$favCol = array(
    'Sohan' => 'Red',
    "Mohan" => 'Yellow',
    "Amit" => 'Green',
    "Nikhil" => 'Gray',
    5 => 'That'
);

// echo $favCol['Sohan']."<br/>";
// echo $favCol[5];

foreach ($favCol as $key => $value) {
    echo "Favorite color of $key is $value." . "<br />";
}

?>