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

$sql = "INSERT INTO MyGuest (firstname, lastname, email)
        VALUES ('John', 'Tantho', 'jontanto@gmail.com')";

if( $conn->query($sql) === TRUE ) {
    $last_id = $conn->insert_id;
    echo "New record created succesfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>