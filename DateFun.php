<?php 
echo "Date function". "<br/>";

$d=date("dS F Y, G:i A");
echo "Todays date is $d <br />" ;

//prints something like : Monday 8th of August 2005 03:12:45 PM
echo "<br> August 21, 2023 is on a ".date("l jS \of F Y h:i:s A").'<br />';
?>

<?php 
$date = new DateTimeImmutable();

// Prints something like: Wednesday
echo $date->format('l'), "\n".'<br />';

// Prints something like: Wednesday 19th of October 2022 08:40:48 AM
echo $date->format('l jS \o\f F Y h:i:s A'), "\n";


?>