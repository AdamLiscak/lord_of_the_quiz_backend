<?php
include("../Database.php");

        //entnehme alle Scores mit einem descending order, WHERE quizID ist eine 端bergeben variable
		$db = new Database();
		$sql = "SELECT name from users";
		$result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$scores = array();
			while($row = $db->fetchObject($result))
			{
				$scores[] = $row;
			}
			for($i=0;$i<sizeof($scores);$i++)
			{
			var_dump($scores[$i]->name);
			}
		}
?>