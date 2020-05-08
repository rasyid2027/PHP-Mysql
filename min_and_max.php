<!-- OOP -->
<!-- comment salah satu kode untuk lihat hasil salah satunya -->

<?php

//MIN

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

// $sql = "SELECT MIN(reg_date) AS FirstRegister FROM MyGuest";
// $result = $conn->query($sql);

// // var_dump($result);
// // die;
// if( $result->num_rows > 0 ) {
//     //output data of each rows
//     while( $row = $result->fetch_assoc() ) {
//         // var_dump($row);
//         // die;
//         echo $row["FirstRegister"];
//     }
// }  else {
//     echo "0 results.";
// }


// $conn->close();


//MAX

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

$sql = "SELECT MAX(reg_date) AS LastRegister FROM MyGuest";
$result = $conn->query($sql);

// var_dump($result);
// die;
if( $result->num_rows > 0 ) {
    //output data of each rows
    while( $row = $result->fetch_assoc() ) {
        // var_dump($row);
        // die;
        echo $row["LastRegister"];
    }
}  else {
    echo "0 results.";
}


$conn->close();

?>