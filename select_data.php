<?php
//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

//Create a connection to the database.
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful.
if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
} else {
    echo "Connection was successful<br />";
}

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);


//Find the number of records returned by myquliQuery.
$totalRecNo = mysqli_num_rows($result);
echo $totalRecNo;
echo "Record found in the database.<br /><br>";

//Display the rows returned by the sql query.
if ($totalRecNo > 0) {
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br />"; 
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br />"; 

    //We can fetch in a better way using the while loop.
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br />";
    }
}
?>