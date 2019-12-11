<?php
$name="quiz";
echo '{"id":"0","name":"'.$name.'","author":"bacock","thumbnail":"cockup.php","questions":[{"id":"0","name":"Wer hat den größten Schwanz ?","answers":["Hitler", "Goebbels", "Mussolini", "Stalin"],"correctAnswer":"3"},{"id":"1","name":"Wer genießt Analsex am meisten ?","answers":["Mugabe","Heinrich VII","Donald Trump","Barbarossa"],"correctAnswer":"1"}]}';
$req_dump = print_r($_POST, TRUE);
var_dump($_POST);
$fp = fopen('requesta.log', 'a') or die("penis !!!");
fwrite($fp, $req_dump."cock\n");
fclose($fp);
?>