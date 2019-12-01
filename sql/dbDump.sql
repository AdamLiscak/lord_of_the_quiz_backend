CREATE DATABASE lord_of_the_quiz
USE lord_of_the_quiz
CREATE TABLE users
(
    int id PRIMARY KEY;
    char[40] name;
    char[40] passwd;
)
CREATE TABLE quizes
(
    int id PRIMARY KEY;
    bitmap thumbnail;
    char[40] name;
)
CREATE TABLE questions
(
    int id PRIMARY KEY;
    int quizid FOREIGN KEY REFERENCES quizes.id;
    char[100] q1;
    char[100] q2;
    char[100] q3;
    char[100] q4;
    int right_answer;
    bitmap thumbnail;
)
CREATE TABLE scoreboard
(
    int id PRIMARY KEY;
    int userID FOREIGN KEY REFERENCES users.id;
    int quizID FOREIGN KEY REFERENCES quizes.id;
    int points;
)