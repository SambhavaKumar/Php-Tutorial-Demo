<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="dbharry";


$conn = mysqli_connect($servername, $username , $password, $database);

if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
} else {
    echo "Connection was successful <br/>";
}

//Create table in tha database
$sql="CREATE TABLE `phpTrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(11) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";


//Create a table in the database using php script

$result=mysqli_query($conn, $sql);

//Check for the table creation success
if($result) {
    echo "The table was created successfully";
}
else {
    echo "The table was not created successfully because of this error--->" . mysqli_error($conn);
}
?>