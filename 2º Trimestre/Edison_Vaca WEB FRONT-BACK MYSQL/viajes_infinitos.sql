CREATE DATABASE viajes_infinitos;
USE  viajes_infinitos;

CREATE TABLE usuarios
(
id INTEGER PRIMARY KEY AUTO_INCREMENT,
usuario VARCHAR(45) NOT NULL,
contraseña VARCHAR(50) NOT NULL
);

SELECT * FROM usuarios;
DROP TABLE usuarios;

INSERT INTO usuarios (usuario,contraseña) VALUES
 ('admin', '12345');

CREATE TABLE informacion(
id INTEGER PRIMARY KEY AUTO_INCREMENT,
titulo VARCHAR(45) NOT NULL,
resumen VARCHAR(200) NOT NULL,
descripcion VARCHAR(600) NOT NULL,
lugar VARCHAR(50) NOT NULL,
imagen1 VARCHAR(80) NOT NULL,
imagen2 VARCHAR(80) NOT NULL
);
SELECT * FROM informacion;
DROP TABLE informacion;
truncate informacion;