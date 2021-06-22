CREATE DATABASE transportes;
USE transportes;


create table empleados (
nombreApellido varchar(50), 
dni int, 
fechaNac date,
email varchar(40),
pass varchar(20),
rol varchar(20),
CONSTRAINT primary key (dni) 
); 

select * from empleados;