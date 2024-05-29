<?php
//Connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="dbharry";

//Create a connection to the database
$conn=mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful.
if(!$conn) {
die("Sorry, we failed to connect". mysqli_connect_error());
}
else {
    echo "Connection was successful."."<br />";
}
//Variables to be inserted into the table
$name="test";
$destination="testDestination";

//Sql query to be executed.
$sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);
//Add a new trip to the database table.
if($result) {
    echo "The record was successfully inserted.";
}
else {
    echo "The record was not successfully inserted." . mysqli_error($conn);
}
?>