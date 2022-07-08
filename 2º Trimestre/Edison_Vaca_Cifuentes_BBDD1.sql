
																/*Creado por Edison Gabriel Vaca Cifuentes*/
/*Empezamos creando la base de datos con el nombre TIENDA*/
create database  TIENDA;
/*Ahora vamos ha empezar ha usar la base de datos TIENDA*/
use TIENDA;
/*Creamos la tabla con el nombre CLIENTES*/
create table CLIENTES (
CODIGO int primary key auto_increment,
APELNOM varchar(100) not null,
FECHALTA timestamp default current_timestamp,/*Agregamos un "default current_timestamp" para poner la fecha cuando el usuario se logea*/
EMAIL varchar (100),
DIRECCIÓN varchar (100) not null
);
/*Nosotros en este caso hemos agregado alguos ejemplos de usuarios para posteriormente verificar si está bien o no*/
insert into CLIENTES (APELNOM, EMAIL, DIRECCIÓN)values
('Rebeca Martorell','rebeca_martonell@gmail.com','Jaraíz de la Vera 3'),
('Guillermina Lago','guillermina_lago@gmail.com','Sepulveda 67 '),
('Ian Crespo','iancrespo@gmail.com','Lucha de los Pobes 35 '),
('Amador Calero','amador_calero@gmail.com','171 Jerde Street'),
('Nagore Marquez','nagore_marquez@gmail.com','802 Eino Rapids'),
('Jose-Miguel Pinto','jose_miguel_pinto@gmail.com','2510 Faye Summit');

/*Seleccionamos a la tabla CLIENTES para verificar si todo  se  ha agregado de forma correcta*/
select * from clientes;

/*Nosotros ahora creamos la tabla PEDIDOS*/
create table PEDIDOS (
CODPED int,
CODCLI int,
PRODUCTO varchar(100),
CANTIDAD double, /*Hemos agregado DOUBLE  ya que  si estamos en un supermercado existe la posibilidad de  coger 1L y medio de leche o de agua*/
BASEIMPONIBLE double, /*También le hemos agregado DOUBLE ya que la BASEIMPONIBLE  es el calculo apartir del  IVA de un producto */
PVP double /*Hemos agregado DOUBLE ya que es la cantidad que pagaríamos */
);

/*Nosotros ahora creamos la tabla CARRITO*/
create table CARRITO (
CODC int primary key auto_increment ,
CODPRO int not null,
CODCLI int not null,
FECHA  timestamp default current_timestamp,
CANTIDAD int not null
);

/*Nosotros ahora creamos la tabla LOG*/
create table LOG (
CODC int not null,
CDPRO int not null,
FECHA date
);

/*Nosotros ahora creamos la tabla ENTREAGAS*/
create table ENTREGAS (
CODENV int primary key auto_increment ,
CLIENTE int not null,
PEDIDO int,
FENTREGA date
);

Select Fentrega ('2022-03-25');


																																	/* ---------- TRIGGERS ---------- */
/*Hemos tenido que agregar este comando para el 2º Triggers  ya  que necesitaramos realizar un UPDATE*/

SET SQL_SAFEUPDATES=0;

/*Ejemplo = Hemos hecho un update  ha pedidos ne el que CODCLI  sea = 2 donde el producto sea = 1  */
update pedidos set CODCLI = 2 where producto = 1;



DELIMITER //
		CREATE TRIGGER DELETE_CARRITO_1
        /*Después de hacer un DELETE*/
		AFTER DELETE
        /*En  la tabla carrito para cada registro de carrito*/
			ON CARRITO FOR EACH ROW
		BEGIN
        /*Haga un insert into log con los parámetros CODC,CDPRO  con los valores antiguos que en este caso es old.CODC y old.CODPRO*/
			insert into log(CODC,CDPRO) values(old.CODC,old.CODPRO);
		END; //
		DELIMITER ;
        

DELIMITER //
		CREATE TRIGGER UPDATE_PEDIDOS_1
		AFTER UPDATE
	/*Después de modificar on PEDIDOS en la tabla PEDIDOS para cada registro de pedidos*/
                   ON PEDIDOS FOR EACH ROW
            BEGIN
	/*Hacemos un insert into en la tabla ENTREGAS   con los parámetros CLIENTE, PEDIDO  en el que vamos a coger los valores de old.CODCLI y old.CODPED*/
                insert into ENTREGAS(CLIENTE,PEDIDO) values(old.CODCLI,old.CODPED);
            END; //
            DELIMITER ;



