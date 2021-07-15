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

create table proforma(id_proforma int auto_increment,
fecha_proforma date,
dni_chofer int,
nombre_cliente varchar(100),
cuit_cliente bigint,
direccion_cliente varchar(50),
telefono_cliente long,
email_cliente varchar(40),
origen_viaje varchar(50),
destino_viaje varchar(50),
fecha_carga_viaje date,
camion_patente varchar(50),
tipo_carga varchar(50),
peso_neto_carga double,
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

create table posicion_actual(id_posicion_actual int auto_increment,
longitud double,
latitud double,
km_recorridos double,
combustible_gastado double,
peajes double,
extras double,
total double,
CONSTRAINT primary key(id_posicion_actual));

alter table empleados add disponible boolean;

CREATE TABLE `tractor` (
                           `tractor_marca` varchar(20) NOT NULL,
                           `tractor_modelo` varchar(20) NOT NULL,
                           `tractor_patente` varchar(7) NOT NULL PRIMARY KEY,
                           `tractor_motor` varchar(10) NOT NULL,
                           `tractor_chasis` varchar(10) NOT NULL
);

INSERT INTO `tractor` (`tractor_marca`, `tractor_modelo`, `tractor_patente`, `tractor_motor`, `tractor_chasis`) VALUES
('IVECO', 'Cursor', 'AA123CD', '53879558', 'L53879558'),
('IVECO', 'Cursor', 'AA124DC', '69904367', 'R69904367'),
('IVECO', 'Cursor', 'AD200XS', '57193968', 'R57193968'),
('IVECO', 'Cursor', 'AA211ZX', '82836641', 'N82836641'),
('IVECO', 'Cursor', 'AC452WE', '28204636', 'R28204636'),
('IVECO', 'Cursor', 'AA233SS', '26139668', 'K26139668'),
('IVECO', 'Cursor', 'AB900QW', '44301415', 'F44301415'),
('IVECO', 'Cursor', 'AC342WW', '44260023', 'D44260023'),
('SCANIA', 'G310', 'AA150QW', '82039512', 'I82039512'),
('SCANIA', 'G410', 'AB198QZ', '18389741', 'V18389741'),
('SCANIA', 'G460', 'AC246QD', '62500687', 'O62500687'),
('SCANIA', 'G310', 'AD294QW', '27510702', 'T27510702'),
('SCANIA', 'G410', 'AA342QZ', '72582865', 'C72582865'),
('SCANIA', 'G460', 'AB390QD', '32041290', 'Z32041290'),
('SCANIA', 'G310', 'AC438QW', '54712451', 'W54712451'),
('SCANIA', 'G410', 'AD486QZ', '56284263', 'L56284263'),
('SCANIA', 'G460', 'AA534QD', '21357689', 'A21357689'),
('M.BENZ', 'Actros 1846', 'AB582QW', '17800122', 'V17800122'),
('M.BENZ', 'Actros 1846', 'AC630QZ', '88648319', 'G88648319'),
('M.BENZ', 'Actros 1846', 'AD678QD', '23849041', 'C23849041'),
('M.BENZ', 'Actros 1846', 'AA726QW', '54650513', 'C54650513'),
('M.BENZ', 'Actros 1846', 'AB774QZ', '46753468', 'J46753468'),
('M.BENZ', 'Actros 1846', 'AC822QD', '60916748', 'J60916748'),
('M.BENZ', 'Actros 1846', 'AD870QW', '30207594', 'M30207594'),
('M.BENZ', 'Actros 1846', 'AA918QZ', '31256965', 'C31256965'),
('M.BENZ', 'Actros 1846', 'AB966QD', '32632699', 'B32632699'),
('M.BENZ', 'Actros 1846', 'AC989QW', '64092078', 'F64092078');


CREATE TABLE `arrastrado` (
                              `arrastrado_tipo` varchar(10) NOT NULL,
                              `arrastrado_patente` varchar(7) NOT NULL PRIMARY KEY,
                              `arrastrado_chasis` varchar(10) NOT NULL
);

INSERT INTO `arrastrado` (`arrastrado_tipo`, `arrastrado_patente`, `arrastrado_chasis`) VALUES
('Araña', 'AA100AS', '585822'),
('Araña', 'AC125AD', '605737'),
('Araña', 'AB135AG', '705687'),
('Araña', 'AD166AS', '815082'),
('Araña', 'AA189AD', '775167'),
('Araña', 'AC208AG', '642287'),
('Araña', 'AB230AS', '678666'),
('Araña', 'AD252AD', '758967'),
('Araña', 'AA274AG', '498515'),
('Jaula', 'AC296AS', '882174'),
('Jaula', 'AB318AD', '595287'),
('Jaula', 'AD340AG', '549916'),
('Jaula', 'AA362AS', '831768'),
('Jaula', 'AC383AD', '535330'),
('Tanque', 'AB405AG', '583419'),
('Tanque', 'AD427AS', '703673'),
('Tanque', 'AA449AD', '884654'),
('Tanque', 'AC471AG', '510019'),
('Tanque', 'AB493AS', '595948'),
('Tanque', 'AD515AD', '704640'),
('Tanque', 'AA537AG', '752105'),
('Tanque', 'AC559AS', '554550'),
('Granel', 'AB581AD', '761560'),
('Granel', 'AD602AG', '555608'),
('Granel', 'AA624AS', '852157'),
('Granel', 'AC646AD', '710797'),
('Granel', 'AB668AG', '815072'),
('Granel', 'AD690AS', '495851'),
('Granel', 'AA712AD', '468708'),
('Granel', 'AC734AG', '661897'),
('Granel', 'AB756AS', '616372'),
('Granel', 'AD778AD', '873758'),
('Granel', 'AA800AG', '820810'),
('Araña', 'AC821AS', '731202'),
('Araña', 'AB843AD', '670323'),
('Araña', 'AD865AG', '747642'),
('Araña', 'AA887AS', '777450'),
('Araña', 'AC909AD', '485098'),
('Araña', 'AB931AG', '806730'),
('Araña', 'AD953AS', '729910'),
('Araña', 'AA975AD', '726457'),
('Araña', 'AC997AG', '730861'),
('CarCarrier', 'AD100AZ', '730027'),
('CarCarrier', 'AD100AQ', '730502'),
('CarCarrier', 'AD100ER', '730978'),
('CarCarrier', 'AD101EF', '731453'),
('CarCarrier', 'AD102HG', '731929'),
('CarCarrier', 'AD103LO', '732404'),
('CarCarrier', 'AD104WE', '732880'),
('CarCarrier', 'AD105ZP', '733355');













/*CREATE DATABASE transportes;
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
origen_viaje varchar(50),
destino_viaje varchar(50),
fecha_carga_viaje date,
tipo_carga varchar(50),
peso_neto_carga double,
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
CONSTRAINT fk_id_chofer_proforma foreign key(dni_chofer) references empleados(dni));
 
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
select * from proforma;
update empleados set rol = 'admin' where dni = 42671687;
update empleados set rol = 'chofer' where dni = 24184348;
drop database transportes; */
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
