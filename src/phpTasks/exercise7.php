<?php
$servername = "localhost";
$username = "amk1004065";
$password = "zNtnsrpn";
$dbname = "wp_amk1004065";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first = "Eljona";
$last = "Pacolli";
$group = "BCAP24A3";
$city = "Hameenlinna";

$sql = "INSERT INTO studentsinfo (first_name, last_name, groupId, city)
        VALUES ('$first', '$last', '$group', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Data submitted successfully</h1>";
    echo "New record created for $first $last.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>