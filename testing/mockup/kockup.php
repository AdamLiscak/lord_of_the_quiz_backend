<?php
$req_dump = file_get_contents('php://input');
$quizID = $_GET["quizID"];
$picID = $_GET["picture"];
$dir = '../pictures/'.$quizID;
$files = scandir($dir);
#$lastImgName = sizeof($files)-1;
$img = $dir."/$picID";
$fp = fopen($img, 'w') or die("penis !!!");
fwrite($fp, $req_dump);
fclose($fp);
?>