<?php
$dir = "../quizzes";
$files = scandir($dir);
$size = sizeof($files)-2;
$page = $_GET["page"];
$range = 12;
$start = $page*$range+1;
$end = $start+$range-1;
if($end>$size)
{
    $end = $size;
}
if($start > $size )
{
    echo "600";
}
else
{
echo "[";
for ($i = $end; $i > $start; $i--)
{
   # echo $i;
   echo file_get_contents("$dir/$i");
   echo ",";
   # echo $files[$i+1];
   # echo " ";
}
echo file_get_contents("$dir/$i");
echo "]";
}
?>
