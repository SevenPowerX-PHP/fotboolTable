CREATE TABLE Actions
(
  Id        SERIAL NOT NULL PRIMARY KEY,
  Game_id INT NOT NULL ,
  Player_id INT NOT NULL ,
  Action CHAR(100) ,
  Action_time char(10),
  Info      TEXT
);