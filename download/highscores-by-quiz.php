<?php
include("../Database.php");
$quizId = $_GET["id"];
$db = new Database();
$sql = "SELECT * FROM (SELECT userID,name,MAX(points) as points FROM scoreboard AS a INNER JOIN users AS b on a.userID=b.id WHERE quizID=$quizId GROUP BY userID) as subquery ORDER BY points DESC LIMIT 10"; 
#"SELECT * FROM scoreboard AS a INNER JOIN users AS b on a.userID=b.id WHERE quizID=$quizId ORDER BY points ASC LIMIT 10";
$result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$scores = array();
			while($row = $db->fetchObject($result))
			{
				$scores[] = $row;
			}
		#	for($i=0;$i<sizeof($scores);$i++)
		#	{
		#	var_dump($scores[$i]);
		#	}
            echo json_encode($scores);
		}

?>
