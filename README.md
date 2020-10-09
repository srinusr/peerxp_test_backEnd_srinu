# peerxp_test_backEnd_srinu
Create mysql database with sample.
  CREATE TABLE sample;
create table users with (id,email,password) fields
      CREATE TABLE users (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      email VARCHAR(30) NOT NULL,
      password VARCHAR(30) NOT NULL
      );
Insert some data which you want to use for login like.
  INSERT INTO MyGuests (email,password) VALUES ( 'john@example.com','Doe')



Running Server Requirements:
  php should installed
 Command to Run server:
     php -S 127.0.0.1:8080 -t ./backend
 
