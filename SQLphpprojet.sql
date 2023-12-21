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
  
CREATE TABLE Images (
    ID INT PRIMARY KEY,
    Nom VARCHAR(255),
    Chemin VARCHAR(255)
);


INSERT INTO Images (Nom, Chemin) VALUES ('pullviolet.jpg', '/chemin/vers/le/fichier/pullviolet.jpg');

SELECT * FROM Images WHERE Nom = 'pullviolet.jpg';
