<?php
$servername = "localhost";
$username = "test";
$password = "test1234";
$dbname = "lord_of_the_quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name from users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>