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

$sql = "SELECT COUNT(id) AS id FROM MyGuest";
$result = $conn->query($sql);

// var_dump($result);
// die;
if( $result->num_rows > 0 ) {
    //output data of each rows
    while( $row = $result->fetch_assoc() ) {
        // var_dump($row);
        // die;
        echo "Jumlah seluruh Register: " . $row["id"];
    }
}  else {
    echo "0 results.";
}


$conn->close();

?>