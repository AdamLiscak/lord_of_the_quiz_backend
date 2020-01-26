<?php
include("../Database.php");

$username = $_GET["username"];
$password = $_GET["password"];

        $db = new Database();

        $sql = "SELECT passwd FROM users WHERE name='$username'";
        $db->query($sql);
        $result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$scores = array();
			while($row = $db->fetchObject($result))
			{
				$scores[] = $row;
			}
            $passwd = ($scores[0]->passwd);
            $isCorrect = ( $passwd == $password );
            echo $isCorrect ? 'true' : 'false';
		}

?>