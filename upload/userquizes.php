<?php
include("../Database.php");

$quiz = $_GET["quiz"];
$userID = $_GET["userID"];
$jsonQuiz = json_decode($quiz, true);

        //entnehme alle Scores mit einem descending order, WHERE quizID ist eine ç«¯bergeben variable
        $da = new Database();
        $sql0 = "INSERT into quizes(authorID) VALUES($userID)";
        $da->query($sql0);

		$db = new Database();
		$sql = "SELECT COUNT(id) as count from quizes";
		$result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$scores = array();
			while($row = $db->fetchObject($result))
			{
				$scores[] = $row;
			}
            $quizID = ($scores[0]->count);
            $jsonQuiz["id"] = $quizID;
        #    print_r($jsonQuiz);
           $k = json_encode($jsonQuiz);
           echo $k;
            echo $quizID;
            $fp = fopen("../quizzes/$quizID", 'w') or die("penis !!!");
            fwrite($fp, $quiz);
            fclose($fp);
            mkdir("../images/$quizID");
		}
?>
