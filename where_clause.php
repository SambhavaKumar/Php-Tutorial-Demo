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


$sql = "SELECT * FROM `phptrip` WHERE `dest` = 'Bihar'";
$result = mysqli_query($conn, $sql);


//Usage of Where clause to fetch data from database.
$totalRecNo = mysqli_num_rows($result);
echo $totalRecNo . " Record found in the database.<br /><br>";

//Display the rows returned by the sql query.
$no=1;
if ($totalRecNo > 0) {
    //We can fetch in a better way using the while loop.
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $no . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br />";
        $no=$no+1;
    }
}

//Usage of Where Clause to Update Data
$sql="UPDATE `phptrip` SET `name` = 'Rohan' WHERE `dest` = 'Bihar'";
$result =mysqli_query($conn, $sql);

echo var_dump($result);
$affectedRow=mysqli_affected_rows($conn);
echo "<br/> Number of affected rows: $affectedRow";

if($result) {
    echo "we updated the record Successfully";
}
else {
    echo "We could not update the record Successfully";
}
?>