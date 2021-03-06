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
alter table empleados add disponible boolean;


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
CONSTRAINT primary key (id_proforma));

create table posicion_actual(id_posicion_actual int auto_increment,
longitud double,
latitud double,
km_recorridos double,
combustible_gastado double,
peajes double,
extras double,
total double,
CONSTRAINT primary key(id_posicion_actual));


alter table posicion_actual add pos_final boolean;


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
('Ara??a', 'AA100AS', '585822'),
('Ara??a', 'AC125AD', '605737'),
('Ara??a', 'AB135AG', '705687'),
('Ara??a', 'AD166AS', '815082'),
('Ara??a', 'AA189AD', '775167'),
('Ara??a', 'AC208AG', '642287'),
('Ara??a', 'AB230AS', '678666'),
('Ara??a', 'AD252AD', '758967'),
('Ara??a', 'AA274AG', '498515'),
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
('Ara??a', 'AC821AS', '731202'),
('Ara??a', 'AB843AD', '670323'),
('Ara??a', 'AD865AG', '747642'),
('Ara??a', 'AA887AS', '777450'),
('Ara??a', 'AC909AD', '485098'),
('Ara??a', 'AB931AG', '806730'),
('Ara??a', 'AD953AS', '729910'),
('Ara??a', 'AA975AD', '726457'),
('Ara??a', 'AC997AG', '730861'),
('CarCarrier', 'AD100AZ', '730027'),
('CarCarrier', 'AD100AQ', '730502'),
('CarCarrier', 'AD100ER', '730978'),
('CarCarrier', 'AD101EF', '731453'),
('CarCarrier', 'AD102HG', '731929'),
('CarCarrier', 'AD103LO', '732404'),
('CarCarrier', 'AD104WE', '732880'),
('CarCarrier', 'AD105ZP', '733355');


alter table tractor add patente_arrastrado varchar(7);

alter table empleados add hash varchar(32);
alter table empleados add activo tinyint(1) default 0;

create table viaje (
					id_viaje int AUTO_INCREMENT,                    
                    dni_chofer int,         
                    origen varchar(50),
                    destino varchar(50),
                    fecha_de_carga date,
                    eta time,
                    estado varchar(50),
                    km_totales int,
                    CONSTRAINT primary key (id_viaje)
					
);


alter table posicion_actual add column id_viaje int;

/*CREADO PARA SUMAR KM A CAMION*/
alter table tractor add column km_camion int default 0;
alter table viaje add column patente_camion varchar(8);
/*CREADO PARA SUMAR KM A CAMION*/