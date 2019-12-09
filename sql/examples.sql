-- Beispielsdatensätze --
INSERT INTO users (name,passwd) VALUES
('bacock','iLoveOldMen'),
('johnny kenis','iAm6inches'),
('brent_mcKendal','iAm3inchesBiggerThanJohnnyKenis');
INSERT INTO quizes(name,authorID) VALUES
('cock measuring contest',1),
('Sexy Old Men',2),
('How to seduce octogenerians',3);
INSERT INTO questions(name,quizid,q1,q2,q3,q4,right_answer) VALUES
('Who has the largest cock ?',1,'Adam','Julian','Bene','Brahma',3),
('What is the largest cock breed ?',1,'Broiler','Kentucky Fried','Brahma','Jersey Giant',3),
('Why is Nazism bad ?',1,'It is homophobic','Suck my cock','No sexy old men to fuck','Adolf Hitler only had one testicle',2),
('How to get into a threesome with old men ?',2,'Lemonparty','Melonparty','Orangeparty','Limeparty',0),
('Is Jack Daniels sexy ?', 2,'Kinda','Very sexy','Beautiful Blue eyes','Well yes',2),
('Would you have sex with Josip Stalin ?',2,'Not sure','da give me some good vodka','no but id jerk off to him','no',1),
('What does Octogenerian stand for',3,'Japanese Octopus Porn','Octagonal vaginas','Sexy old men in their 80s','8 inchers',2),
('Who is the most sexy ?',3,'Pope Franciscus VII','Adolf Hitler','Benito Mussolini','Jack Daniels',3),
('Who is the most sexy ?',3,'Kim Jong Un','Kim Il Sung','Kim Jong Il','Mao Ze Dong',1);
Insert into scoreboard(userId,quizID,points) VALUES
(3,1,300),
(2,1,320),
(1,2,440),
(3,2,260),
(1,3,500),
(2,3,350);
-- Bräuchte noch für die Restlichen Tabellen je 3 Beispielsdatensätze --