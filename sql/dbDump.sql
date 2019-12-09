CREATE DATABASE lord_of_the_quiz;
USE lord_of_the_quiz;
CREATE TABLE users (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(40) UNIQUE,
  passwd varchar(40)
);
CREATE TABLE quizes (
  id int PRIMARY KEY AUTO_INCREMENT,
  thumbnail LONGBLOB,
  name varchar(40),
  authorID int,
  FOREIGN KEY (authorID) REFERENCES users(id)
);
CREATE TABLE questions (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(100),  
  quizid int,
  FOREIGN KEY (quizid) REFERENCES quizes(id),
  q1 varchar(100),
  q2 varchar(100),
  q3 varchar(100),
  q4 varchar(100),
  right_answer int,
  thumbnail LONGBLOB
);
CREATE TABLE scoreboard (
  id int PRIMARY KEY AUTO_INCREMENT,
  userID int,
  FOREIGN KEY (userID) REFERENCES users(id),
  quizID int,
  FOREIGN KEY (quizID) REFERENCES quizes(id),
  points int
);

