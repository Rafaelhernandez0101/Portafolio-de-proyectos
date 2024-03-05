Use citasmedic;

insert into medicos values ('567899', 'Alejandro', 'Murillo');
insert into medicos values ('582304', 'Juan', 'Perez');
insert into medicos values ('230348', 'Maria', 'Flores');
insert into medicos values ('004834', 'Elena', 'Hernandez');
insert into medicos values ('232300', 'Fiona', 'Lopez');

select * from Medicos;



insert into pacientes values ('21234594', 'Juan', 'Perez', '2000-03-04', 'M'); 
insert into pacientes values ('12458905', 'Julio', 'Maderos', '2004-02-30', 'M');
insert into pacientes values ('13445677', 'Luis', 'Maduro', '2015-05-20', 'M'); 
insert into pacientes values ('19890805', 'Maria', 'Ortiz', '2003-08-18', 'F');
insert into pacientes values ('12734789', 'Julia', 'Perea', '2020-11-12', 'F');

select * from pacientes; 



insert into consultorios values ('234', 'Consultorio oftalmologia'); 
insert into consultorios values ('342', 'Consultorio Optometria');
insert into consultorios values ('323', 'Consultorio pediatria');
insert into consultorios values ('123', 'Consultorio Nutricion');
insert into consultorios values ('456', 'Consulorio Pediatria');

select * from consultorios; 



insert into tratamientos values ('0466309', '07-05-23', 'revision anual comun', '07-05-23', '07-05-23', 'normal');
insert into tratamientos values ('4675675', '09-03-23', 'revision de ojos', '09-03-23', '09-03-23', 'normal');
insert into tratamientos values ('6755733', '10-03-23', 'revision mensual del pacientes', '09-03-23', '09-03-23', 'normal');
insert into tratamientos values ('4587987','04-07-23', 'revision comun', '04-07-23', '04-07-23', 'normal');
insert into tratamientos values ('0932098','05-05-23', 'revision normal', '05-05-23', '05-05-23', 'normal'); 

select * from tratamientos;

