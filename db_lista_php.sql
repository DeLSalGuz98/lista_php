CREATE DATABASE db_lista_php ;

USE db_lista_php;

CREATE TABLE Usuario (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    contra VARCHAR(100) NOT NULL
);
