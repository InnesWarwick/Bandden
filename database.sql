DROP DATABASE IF EXISTS bandden;
CREATE DATABASE bandden;

CREATE TABLE bandden.users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(32) UNIQUE NOT NULL,
  email VARCHAR(128) NOT NULL,
  password VARCHAR(60) NOT NULL,
  user_role VARCHAR(24) NOT NULL DEFAULT "Member"
);


CREATE TABLE bandden.posts (
  post_id INT NOT NULL,
  user_id INT NOT NULL,
  title VARCHAR(64) NOT NULL,
  content VARCHAR(2400) NOT NULL,
  PRIMARY KEY(post_id, user_id),
  FOREIGN KEY (user_id) REFERENCES users(user_id),
);


INSERT INTO bandden.posts(post_id,user_id,title,content) VALUES
(1,1,"help wanted","i need help with my project"),
(2,1,"never mind i found help","i dont need you guys anymore"),
(3,2,"come help me instead","guys i need the help this if guy doesnt");


INSERT INTO bandden.users(user_id,username,email,password) VALUES
(1,"barrymusic","barry@music.com","1234qwerty"),
(2,"steveOnTheTown","steve05@music.com","steve33");