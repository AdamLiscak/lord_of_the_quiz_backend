<?php
$name="quiz";
echo '{}'
$req_dump = print_r($_POST, TRUE);
var_dump($_POST);
$fp = fopen('requesta.log', 'a') or die("penis !!!");
fwrite($fp, $req_dump."Hahn\n");
fclose($fp);
?>
