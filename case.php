<!-- OOP -->
<!-- comment salah satu kode untuk lihat hasil salah satunya -->

<?php

// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname = "learn";

// //create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// //check connection
// if ($conn->connect_error) {
//     die("Connection Failed:" . $conn->connect_error);
// }

// $sql = "SELECT firstname, lastname,
//         CASE
//             WHEN firstname = 'Imem' THEN 'Bajingan Kotaagung'
//             WHEN firstname = 'Fauz' THEN 'Batok Kabir'
//             ELSE 'Nama ngawur aja'
//         END AS DescPers 
//         FROM MyGuest ";
// $result = $conn->query($sql);

// // var_dump($result);
// // die;
// if ($result->num_rows > 0) {
//     //output data of each rows
//     while ($row = $result->fetch_assoc()) {
//         // var_dump($row);
//         // die;
//         echo "Nama: " . $row['firstname']. " " . $row['lastname']. " | dengan deskripsi: " . $row['DescPers']. "<br>";
//     }
// } else {
//     echo "0 results.";
// }

// $conn->close();


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "learn";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

$sql = "SELECT * FROM MyGuest
        ORDER BY
        (CASE
            WHEN firstname = 'Imem' THEN lastname
            ELSE firstname
        END)";
$result = $conn->query($sql);

// var_dump($result);
// die;
if ($result->num_rows > 0) {
    //output data of each rows
    while ($row = $result->fetch_assoc()) {
        // var_dump($row);
        // die;
        echo "Nama: " . $row['firstname']. " " . $row['lastname']. " | Email: " . $row['email']. " | " . $row['reg_date']. "<br>";
    }
} else {
    echo "0 results.";
}

$conn->close();

?>