<?php 

//Connecting to the database modify
// testing differ 123
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

//Create a connection to the database. ddd
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful.
if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
} else {
    echo "Connection was successful<br />";
}

$sql = "DELETE FROM `phptrip` WHERE `dest`= 'Bihar'";
$result = mysqli_query($conn, $sql);

echo var_dump($result);
$affectedRow=mysqli_affected_rows($conn);
echo "<br/> Number of affected rows: $affectedRow";



?>