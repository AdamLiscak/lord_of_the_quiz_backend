<?php
$name="quiz";
echo '{"id":"0","name":"'.$name.'","author":"bacock","thumbnail":"cockup.php","questions":[{"id":"0","name":"Wer hat den größten Schwanz ?","answers":["Hitler", "Goebbels", "Mussolini", "Stalin"],"correctAnswer":"3"},{"id":"1","name":"Wer genießt Analsex am meisten ?","answers":["Mugabe","Heinrich VII","Donald Trump","Barbarossa"],"correctAnswer":"1"}]}';
$req_dump = file_get_contents('php://input');
$dir = '../pictures';
$files = scandir($dir);
$lastImgName = sizeof($files)-1;
$img = $dir."/$lastImgName";
$fp = fopen($img, 'w') or die("penis !!!");
fwrite($fp, $req_dump);
fclose($fp);
?>