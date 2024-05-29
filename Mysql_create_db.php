<?php 
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername, $username. $password);

if(!$conn) {
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else {
    echo "Connection was successful <br/>";
}

//Create a db
$sql="CREATE DATABASE dbHarry2";
$result=mysqli_query($conn, $sql);

//Check for the database creation success
if($result) {
    echo "The db was created successfully";
}
else {
    echo "The db was not created successfully because of this error--->" . mysqli_error($conn);
}
?>