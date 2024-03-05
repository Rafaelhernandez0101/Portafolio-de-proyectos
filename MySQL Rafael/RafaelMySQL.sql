create database citasmedic;

use citasmedic;

create table pacientes
(
PacIdentificacion char (10) primary key not null, 
PacNombres varchar (50) not null,
PacApellido varchar (50) not null,
PaFechaNcimiento date not null,
PacGenero ENUM ('M', 'F') not null
);

create table Medicos
(MedIdentificacion char (10) primary key not null,
MedNombres varchar (50) not null,
MedApellidos varchar (50) not null
);

create table consultorios (
conNumero int (3) primary KEY not null,
conNombre VARCHAR (50) NOT NULL
);

create table tratamiento (
TraNumero int primary key not null auto_increment,
TraFechaAsignado date not null,
TraDescripcion text not null,
TraFchaInicio date not null,
TraFechaFin date not null,
TraPacientes char (10) not null
);

create table citas (
CitNUmero int not null primary key,
CitFecha date not null,
CitaHora varchar (19),
CitPaciente char (10) not null,
CitMedico char (10),
CitConsultorio int not null,
CitEstado ENUM ('Asignada','Cumplida') not null default "Asignada",
CitaObservaciones text not null
); 


show databases;
show tables from citas;
describe tratamiento;

alter table citas
add foreign key (CitPaciente) references pacientes (PacIdentificacion),
add foreign key (CitMedico) references Medicos (MedIdentificacion),
add foreign key (CitConsultorio) references Consultorios (ConNumero);

alter table tratamiento
add foreign key ( Trapacientes ) references Pacientes ( PacIdentificacion );

alter table tratamiento
modify column TraFechaFin Date not null
after TraFechaInicio;

alter table tratamiento
add column TraTemporal date not null; 	

alter table tratamiento
drop column TraTemporal;



