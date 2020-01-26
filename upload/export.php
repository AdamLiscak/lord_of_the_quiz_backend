<?php
include("../Database.php");

$quizId = $_GET["quizId"];
$username = $_GET["username"];
$points = $_GET["points"];

        //entnehme alle Scores mit einem descending order, WHERE quizID ist eine ç«¯bergeben variable
 $da = new Database();
 $sql0 = "INSERT into scoreboard(userID,quizID,points) values((SELECT id FROM users where name='$username'),$quizId,$points)";
 $da->query($sql0);
 echo 200;
?>