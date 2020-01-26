<?php
include("../Database.php");

$username = $_GET["username"];
$password = $_GET["password"];

        //entnehme alle Scores mit einem descending order, WHERE quizID ist eine ç«¯bergeben variable
        $da = new Database();
try {
        $sql0 = "INSERT into users(name,passwd) VALUES('$username','$password')";
        $da->query($sql0);
        echo 200;
}
catch ( PDOException $e)
{
    echo 601;
}
?>