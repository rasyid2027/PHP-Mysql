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
        VALUES ('John', 'Tantho', 'jontanto@gmail.com');";
$sql .= "INSERT INTO MyGuest (firstname, lastname, email)
        VALUES ('Ntung', 'Heho', 'ntungheho@gmail.com');";
$sql .= "INSERT INTO MyGuest (firstname, lastname, email)
        VALUES ('Imem', 'Kathir', 'imemkathir@gmail.com')";

if( $conn->multi_query($sql) === TRUE ) {
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>