CREATE DATABASE mydatabase;
use mydatabase;

CREATE TABLE posts(
    id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(15) DEFAULT NULL,
    descricao varchar(50) DEFAULT NULL,
    data varchar(10) DEFAULT NULL,
    PRIMARY KEY(id)
);