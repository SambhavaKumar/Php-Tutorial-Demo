<?php
echo "Welcome to the stage where we are ready to get connected to the database." . '<br/>';
/*
Ways to connect ot a MYSQL Database
1. MySQLi extension
2. PDO - PHP Data Objects 
*/

/**Connecting to the Database */
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection 
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful.
if (!$conn) {
    die("Sorry we failed to connect to the database: " . mysqli_connect_error());
} else {
    echo "Connection was successful.";
}
?>