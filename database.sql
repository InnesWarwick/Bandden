-- Drop the database if it exists
DROP DATABASE IF EXISTS bandden;

-- Create the database
CREATE DATABASE bandden;

-- Create the users table
CREATE TABLE bandden.users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(32) UNIQUE NOT NULL,
  email VARCHAR(128) NOT NULL,
  password VARCHAR(60) NOT NULL,
  user_role VARCHAR(24) NOT NULL DEFAULT 'Member'
);

-- Create the posts table
CREATE TABLE bandden.posts (
  post_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  title VARCHAR(64) NOT NULL,
  content VARCHAR(2400) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES bandden.users(user_id)
);

-- Insert into users table
INSERT INTO bandden.users(username, email, password) VALUES
('barrymusic', 'barry@music.com', '1234qwerty'),
('steveOnTheTown', 'steve05@music.com', 'steve33');

-- Insert into posts table
INSERT INTO bandden.posts(user_id, title, content) VALUES
(1, 'help wanted', 'I need help with my project'),
(1, 'never mind I found help', 'I don''t need you guys anymore'),
(2, 'come help me instead', 'Guys, I need the help; this if guy doesn''t');
