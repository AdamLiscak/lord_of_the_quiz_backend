-- select some quizes to display them in shortened form --
SELECT * FROM quizes WHERE id BETWEEN x AND y 
-- select all questions in a certain quiz --
SELECT id,q1,q2,q3,q4,right_answer,thumbnail FROM questions WHERE quizid=<your_id> ORDER BY id  ASC
-- select first x highscores in scoreboard by quiz --
SELECT  DISTINCT name FROM scoreboard AS a INNER JOIN users AS b on a.userID=b.id WHERE  quizID = <your_id>  ORDER BY score ASC LIMIT <x> 
-- select first x highscores in scoreboard by user --
SELECT  DISTINCT name FROM scoreboard AS a INNER JOIN quizes AS b on a.quizID=b.id WHERE  userID = <your_id>  ORDER BY score ASC LIMIT <x> 
-- select first x scores in scoreboard by user and quiz --
SELECT name FROM scoreboard AS a INNER JOIN quizes AS b on a.quizID=b.id WHERE  userID = <your_id> AND quizID= <your_second_id>  ORDER BY score ASC LIMIT <x> 