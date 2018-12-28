CREATE TABLE GameSubj
(
  Id        SERIAL NOT NULL PRIMARY KEY,
  Game_id integer not null ,
  Command_id INT NOT NULL ,
  Goals INT
);