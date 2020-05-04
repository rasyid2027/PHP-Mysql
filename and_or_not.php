<!-- OOP -->

<!-- silakan comment dua dari tiga contoh sub bab dibawah untuk melihat hailnya -->

<?php

//AND

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

// $sql = "SELECT id, firstname, lastname FROM MyGuest WHERE lastname = 'Tantho' AND firstname = 'John'";
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

//OR

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

// $sql = "SELECT id, firstname, lastname FROM MyGuest WHERE lastname = 'Tantho' OR firstname = 'Arap'";
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

//NOT

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

$sql = "SELECT id, firstname, lastname FROM MyGuest WHERE NOT lastname = 'Tantho'";
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