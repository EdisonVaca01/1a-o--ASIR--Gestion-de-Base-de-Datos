CREATE DATABASE HOSPITAL;
USE HOSPITAL;

CREATE TABLE PACIENTES(
	COD INT PRIMARY KEY AUTO_INCREMENT,
    APELNOM CHAR(100) NOT NULL,
    FECHA TIMESTAMP DEFAULT current_timestamp,
    NIF VARCHAR(15) UNIQUE,
    RESULTADO SET("POSITIVO","NEGATIVO","ERRONEO"),
    OBSERVACIONES MEDIUMTEXT
);

INSERT INTO PACIENTES (APELNOM,NIF,RESULTADO) VALUES 
("ALVAREZ LOPEZ, RAUL","15151515F","POSITIVO"),
("JIMENEZ DIAZ, ALBERTO","8547552F","NEGATIVO"),
("GARCIA NARVAEZ, CARLOS","1847564S","ERRONEO");

SELECT * FROM PACIENTES;
SELECT * FROM POSITIVOS;
SELECT * FROM REVISIONES;

TRUNCATE TABLE PACIENTES;
TRUNCATE TABLE POSITIVOS;
TRUNCATE TABLE REVISIONES;

CALL ASIGNACION();

CREATE TABLE POSITIVOS(
	COD INT NOT NULL,
    NOMBRE VARCHAR(100),
    RESULT CHAR(10),
    FPRUEBA DATE
);

ALTER TABLE POSITIVOS ADD COLUMN FPRUEBA DATE;
DESCRIBE POSITIVOS;

CREATE TABLE REVISIONES (
	COD INT NOT NULL,
    NOMBRE VARCHAR(100),
    RESULT CHAR(10),
    FNUEVA DATE
);
