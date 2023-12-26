create user Diaw identified by 'dw';
grant create on *.* to dw;

create database diawab1;
USE diawab1;

grant all on diawab1.* to Diaw;
CREATE DATABASE Dw;
USE Dw;

CREATE TABLE articles (
    id INT,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT,
    datepublication DATE,
    auteur VARCHAR(100),
    categorie VARCHAR(50)
);

CREATE TABLE velos(
id INT,
nom TEXT,
image TEXT,
prix INT,
description TEXT
);
INSERT INTO velos ( id, nom, image, prix, description)
VALUES ('3','BikePrime','https://www.canyon.com/dw/image/v2/BCML_PRD/on/demandware.static/-/Sites-canyon-master/default/dw11f7952c/images/full/full_2023_/2023/full_2023_3564_ultimate-cfr-di2_P04_P5.jpg?sw=1300&sfrm=png&q=90&bgcolor=F2F2F2','9999.99', 'UN VELO POUR LES LEGENDES !');


UPDATE bike
SET image=' '
WHERE id = dw;

show tables;

SELECT * FROM velos;

