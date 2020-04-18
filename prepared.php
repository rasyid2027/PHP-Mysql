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

//prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuest (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

//set parameters and execute
$firstname = "Garong";
$lastname = "Ciledug";
$email = "gardug@gmail.com";
$stmt->execute();

$firstname = "Fauz";
$lastname = "Jinong";
$email = "fauzjinong@gmail.com";
$stmt->execute();

$firstname = "Arap";
$lastname = "Gokiel";
$email = "arapgokiel@gmail.com";
$stmt->execute();

echo "New record succesfully";
echo "<br>";

// //ambil hasil query
// $result = $stmt->get_result();

// //tampilkan hasil query
// while( $row = $result->fetch_row() ) {
//     echo "$row[0] $row[1] $row[2] $row[3] $row[4]";
//     echo "<br />";
// }

$stmt->close();
$conn->close();

?>