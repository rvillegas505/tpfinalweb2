CREATE DATABASE transportes;
USE transportes;

create table empleados (
nombreApellido varchar(50), 
dni int, 
fechaNac date,
email varchar(40),
pass varchar(20),
rol varchar(20),
disponible boolean,
CONSTRAINT primary key (dni) 
);

create table proforma(id_proforma int auto_increment,
fecha_proforma date,
dni_chofer int,
nombre_cliente varchar(100),
cuit_cliente int,
direccion_cliente varchar(50),
telefono_cliente long,
email_cliente varchar(40),
km_estimado double,
combustible_estimado double,
origen_viaje varchar(50),
destino_viaje varchar(50),
fecha_carga_viaje date,
tipo_carga varchar(50),
peso_neto_carga double,
etd_estimado time,
eta_estimado time,
viaticos_estimado double,
peajes_estimado double,
extras_estimado double,
hazard_estimado double,
reefer_estimado double,
fee_estimado double,
total_estimado double,
CONSTRAINT primary key (id_proforma));
 
 create table viaje(id_viaje int auto_increment,
 id_proforma int,
 dni_chofer int,
 origen varchar(50),
 destino varchar(50),
 fecha_carga date,
 eta varchar(50),
 CONSTRAINT primary key(id_viaje),
 CONSTRAINT fk_id_proforma_viaje foreign key(id_proforma) references proforma(id_proforma),
 CONSTRAINT fk_dni_chofer_viaje foreign key(dni_chofer) references empleados(dni));

create table carga(id_carga int auto_increment,
tipo_carga varchar(50),
peso_neto double,
CONSTRAINT primary key(id_carga));

create table costeo_real(id_costeo_real int auto_increment,
id_proforma int, 
km_real double, 
combustible_real double, 
etd_real double, 
eta_real double, 
viaticos_real double, 
peajes_real double, 
extras_real double, 
hazard_real double, 
reefer_real double, 
fee_real double, 
total_real double,
CONSTRAINT primary key(id_costeo_real),
CONSTRAINT fk_id_proforma_costeo_real foreign key(id_proforma) references proforma(id_proforma)); 

create table posicion_actual(id_posicion_actual int auto_increment,
longitud int,
latitud int,
km_recorridos double,
combustible_gastado double,
peajes double,
extras double,
total double,
CONSTRAINT primary key(id_posicion_actual));

select * from posicion_actual;
select * from empleados;
update empleados set rol = 'admin' where dni = 42671687;
update empleados set rol = 'chofer' where dni = 24184348;
drop database transportes;
/*
create table proforma(id_proforma int auto_increment,
fecha_proforma date,
dni_chofer int,
nombre_cliente varchar(50),
cuit_cliente int,
direccion_cliente varchar(50),
telefono_cliente int,
email_cliente varchar(40),
km_estimado double,
combustible_estimado double,
etd_estimado time,
eta_estimado time,
viaticos_estimado double,
peajes_estimado double,
extras_estimado double,
hazard_estimado double,
reefer_estimado double,
fee_estimado double,
total_estimado double,
CONSTRAINT primary key (id_proforma),
CONSTRAINT fk_dni_chofer_proforma foreign key(dni_chofer) references empleados(dni));

 create table viaje(id_viaje int auto_increment,
 id_proforma int,
 dni_chofer int,
 origen varchar(50),
 destino varchar(50),
 fecha_carga date,
 eta varchar(50),
 CONSTRAINT primary key(id_viaje),
 CONSTRAINT fk_id_proforma_viaje foreign key(id_proforma) references proforma(id_proforma),
 CONSTRAINT fk_dni_chofer_viaje foreign key(dni_chofer) references empleados(dni));

create table carga(id_carga int auto_increment,
tipo_carga varchar(50),
peso_neto double,
CONSTRAINT primary key(id_carga));
*/
