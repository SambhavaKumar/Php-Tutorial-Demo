<?php

echo "Multidimensional_array" . '<br/>';

$multiDim = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);

// echo $multiDim[2][2];
// //printing the contents of a two dimensional array.
// for ($i = 0; $i < count($multiDim); $i++) {
//     echo ($multiDim[$i]);
//     echo '<br/>';
// }

for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j];
        echo " ";
    }
    // echo ($multiDim[$i]);
    echo '<br/> ';
}
echo '<br/> <br/>';

// 3 dimensionsal array 
$threeDim = array(
    array(
        array(1, 2, 3, 4, 5),
        array(5, 6, 7, 8, 9),
        array(10, 11, 12, 13, 14)
    ),
    array(
        array(15, 16, 17, 18, 19),
        array(20, 21, 22, 23, 25),
        array(26, 27, 28, 29, 30),
    ),
);

for ($i = 0; $i < count($threeDim); $i++) {
    for ($j = 0; $j < count($threeDim[$i]); $j++) {
        for ($k = 0; $k < count($threeDim[$i][$j]); $k++) {
            echo $threeDim[$i][$j][$k];
            echo " ";
        }
        echo "<br />";
    }
    echo "<br />";
}

?>