<?php
echo "Function test <br/>";

function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
        // $sum = $sum + $value;
    }
    return $sum;
}

function avgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}

$rohan = [24, 34, 56, 78, 75, 90];
$sumMarks = processMarks($rohan);
$avgMark = avgMarks($rohan);
echo "$avgMark <br>";
echo "Total marks scored by rohan out of 600 is $sumMarks " . "<br>";

?>

<?php
//User Defined function
/*
function functionName() {
  code to be executed;
}
*/
function writeMsg()
{
    echo "Hello Sambhava" . "<br />";
}
writeMsg();
?>

<?php
//Php function Arguments
function familyName($fname)
{
    echo "$fname Pandey.<br/>";
}

familyName("Sambhava");
familyName("Amit");


//Passed two Arguments
function familyName1($fname, $year) {
    echo "$fname Pandey. Born in $year <br />"; 
}

familyName1("Amman", "1975");
familyName1("Sumit", "1979");

?>


<?php
function addNumbers(int $a, int $b) 
    {
        return ('$a+$b');
    }
echo addNumbers('5', '5 Days'); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>