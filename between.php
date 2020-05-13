<!-- OOP -->
<!-- comment salah satu kode untuk lihat hasil salah satunya -->

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

$sql = "SELECT * FROM MyGuest WHERE reg_date BETWEEN '2020-04-14 06:00:00' AND '2020-04-14 12:00:00'";
$result = $conn->query($sql);

// var_dump($result);
// die;
if( $result->num_rows > 0 ) {
    //output data of each rows
    while( $row = $result->fetch_assoc() ) {
        // var_dump($row);
        // die;
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["reg_date"]. "<br>";
    }
}  else {
    echo "0 results.";
}


$conn->close();

?>