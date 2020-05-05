<!-- OOP -->

<!-- hapus comment pada code atas untuk lihat hasil  -->

<?php

//IS NULL

// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname = "learn";

// //create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// //check connection
// if( $conn->connect_error ) {
//     die("Connection Failed:" . $conn->connect_error);
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuest WHERE lastname IS NULL";
// $result = $conn->query($sql);

// if( $result->num_rows > 0 ) {
//     //output data of each rows
//     while( $row = $result->fetch_assoc() ) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// }  else {
//     echo "0 results.";
// }


// $conn->close();


//IS NOT NULL

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

$sql = "SELECT id, firstname, lastname FROM MyGuest WHERE lastname IS NOT NULL";
$result = $conn->query($sql);

if( $result->num_rows > 0 ) {
    //output data of each rows
    while( $row = $result->fetch_assoc() ) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}  else {
    echo "0 results.";
}


$conn->close();

?>