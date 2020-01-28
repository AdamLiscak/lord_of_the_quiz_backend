<?php
$req_dump = file_get_contents('php://input');
$quizID = $_GET["quizID"];
$picID = $_GET["picture"];
$picID = preg_replace("/[?]/", "", $picID);
$dir = '../images/'.$quizID;
#$files = scandir($dir);
#$lastImgName = sizeof($files)-1;
$img = $dir."/$picID";
echo $img;
$fp = fopen($img, 'w') or die("penis !!!");
fwrite($fp, $req_dump);
fclose($fp);
chmod($img, 0764);
$fq = fopen("uploadimage.log",'a') or die ("penis!!!");
fwrite($fq, $img);
fclose($fq);
?>

