<!-- OOP -->

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "learn";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if( $conn->connect_error ) {
    die("Connection Failed:" . $conn->connect_error);
}

$sql = "SELECT DISTINCT reg_date FROM MyGuest";
$result = $conn->query($sql);

if( $result->num_rows > 0 ) {
    //output data of each rows
    while( $row = $result->fetch_assoc() ) {
        echo $row["reg_date"]. "<br>";
    }
}  else {
    echo "0 results.";
}


$conn->close();

?>