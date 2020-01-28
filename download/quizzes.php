<?php
# echo '{"quizzes":[{"id":"0","name":"quiz","author":"bacock","thumbnail":"cockup.php","questions":[{"id":"0","name":"Wer hat den größten Schwanz ?","answers":["Hitler", "Goebbels", "Mussolini", "Stalin"],"correctAnswer":"3"},{"id":"1","name":"Wer genießt Analsex am meisten ?","answers":["Mugabe","Heinrich VII","Donald Trump","Barbarossa"],"correctAnswer":"1"}]},{"id":"0","name":"quiz","author":"bacock","thumbnail":"cockup.php","questions":[{"id":"0","name":"Wer hat den größten Schwanz ?","answers":["Hitler", "Goebbels", "Mussolini", "Stalin"],"correctAnswer":"3"},{"id":"1","name":"Wer genießt Analsex am meisten ?","answers":["Mugabe","Heinrich VII","Donald Trump","Barbarossa"],"correctAnswer":"1"}]},{"id":"0","name":"quiz","author":"bacock","thumbnail":"cockup.php","questions":[{"id":"0","name":"Wer hat den größten Schwanz ?","answers":["Hitler", "Goebbels", "Mussolini", "Stalin"],"correctAnswer":"3"},{"id":"1","name":"Wer genießt Analsex am meisten ?","answers":["Mugabe","Heinrich VII","Donald Trump","Barbarossa"],"correctAnswer":"1"}]}]}';
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