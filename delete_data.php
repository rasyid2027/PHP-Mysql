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

$sql = "DELETE FROM MyGuest WHERE lastname = 'Ciledug'";

if( $conn->query($sql) === TRUE ) {
    echo "Record deleted succesfully";
} else {
    echo "Error deleting data. "                                                                                                                                    . $conn->error;
}


$conn->close();

?>