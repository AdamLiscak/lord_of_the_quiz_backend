CREATE DATABASE lord_of_the_quiz;
USE lord_of_the_quiz;
CREATE TABLE users (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(40) UNIQUE,
  passwd varchar(40)
);
CREATE TABLE quizes (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(40),
  authorID int,
  FOREIGN KEY (authorID) REFERENCES users(id)
);
CREATE TABLE scoreboard (
  id int PRIMARY KEY AUTO_INCREMENT,
  userID int,
  FOREIGN KEY (userID) REFERENCES users(id),
  quizID int,
  FOREIGN KEY (quizID) REFERENCES quizes(id),
  points int
);

