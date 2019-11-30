<!DOCTYPE html>
<html>
<body id="penis">

<h1>My First Heading</h1>
<p>My first paragraph.</p>
<form method="post" action="index.php">
  <div>
    <label for="say">What greeting do you want to say?</label>
    <input name="say" id="say" value="Hi">
  </div>
  <div>
    <label for="to">Who do you want to say it to?</label>
    <input name="to" id="to" value="Mom">
  </div>
  <div>
    <button>Send my greetings</button>
  </div>
<?php
$file = file_get_contents("cocks.txt");
$myfile = fopen("cocks.txt","w") or die("Unable to open file!");
$current = $file."\n"."penis".($_POST["to"]);#$_POST("to");
fwrite($myfile,$current);
fwclose($myfile);
?>
</form>
cock</body>
</html>