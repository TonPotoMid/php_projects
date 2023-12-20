CREATE DATABASE Hd;
show databases;
USE Hd;
CREATE TABLE customer(
id INT, 
name VARCHAR(50)
);
INSERT INTO customer(id,name)
VALUES(1,"John");
SELECT*FROM customer;
  