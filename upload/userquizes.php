<?php
include("../Database.php");

$quiz = $_GET["quiz"];
$author = $_GET["author"];
$jsonQuiz = json_decode($quiz, true);

        //entnehme alle Scores mit einem descending order, WHERE quizID ist eine ç«¯bergeben variable
        $da = new Database();
        $sql0 = "INSERT into quizes(authorID) VALUES((SELECT id FROM users WHERE name='$author'))";
        $da->query($sql0);

		$db = new Database();
		$sql = "SELECT id from quizes ORDER BY id DESC LIMIT 1";
		$result = $db->query($sql);
		if($db->numRows($result) > 0)
		{
			$scores = array();
			while($row = $db->fetchObject($result))
			{
            $scores[] = $row;
			}
            $quizID = ($scores[0]->id);
            $jsonQuiz["id"] = $quizID;
        #    print_r($jsonQuiz);
           $quiz = json_encode($jsonQuiz);
           echo $quizID;
            $fp = fopen("../quizzes/$quizID", 'w') or die("penis !!!");
            fwrite($fp, $quiz);
            fclose($fp);
            mkdir("../images/$quizID");
            chmod("../quizzes/$quizID", 0764);
            chmod("../images/$quizID", 0764);
		}
?>
