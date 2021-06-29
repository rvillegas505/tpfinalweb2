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

create table proforma(id_proforma int auto_increment,
 fecha_proforma date,
 CONSTRAINT primary key (id_proforma));
 
 create table cliente(cuit int,
 id_proforma int,
 direccion varchar(50),
 telefono long,
 email varchar(40),
 CONSTRAINT primary key (cuit),
 CONSTRAINT fk_id_proforma_cliente foreign key(id_proforma) references proforma(id_proforma));
 
 create table chofer(dni int, primary key(dni));
 
 create table viaje(id_viaje int auto_increment,
 id_proforma int,
 dni_chofer int,
 origen varchar(50),
 destino varchar(50),
 fecha_carga date,
 eta varchar(50),
 CONSTRAINT primary key(id_viaje),
 CONSTRAINT fk_id_proforma_viaje foreign key(id_proforma) references proforma(id_proforma),
 CONSTRAINT fk_dni_chofer_viaje foreign key(dni_chofer) references chofer(dni));

create table carga(id_carga int auto_increment,
tipo_carga varchar(50),
peso_neto double,
CONSTRAINT primary key(id_carga));

create table costeo_estimado(id_costeo_estimado int auto_increment,
id_proforma int,
km_estimado double,
combustible_estimado double,
etd_estimado double,
eta_estimado double,
viaticos_estimado double,
peajes_estimado double,
extras_estimado double,
hazard_estimado double,
reefer_estimado double,
fee_estimado double,
total_estimado double,
CONSTRAINT primary key(id_costeo_estimado),
CONSTRAINT fk_id_proforma_costeo_estimado foreign key(id_proforma) references proforma(id_proforma));

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
