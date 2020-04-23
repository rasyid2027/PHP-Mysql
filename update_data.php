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

$sql = "UPDATE MyGuest SET lastname = 'Djancooeek' WHERE lastname = 'Kathir'";

if( $conn->query($sql) === TRUE ) {
    echo "Record updated succesfully";
} else {
    echo "Error updating data. " . $conn->error;
}


$conn->close();

?>