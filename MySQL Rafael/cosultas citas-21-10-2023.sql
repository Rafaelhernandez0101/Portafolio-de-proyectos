Use citasmedic;

-- select 
select * from pacientes;
select * from pacientes
limit 3;

select PacNombres, PacApellido, PacGenero  from pacientes;

-- alias a lis campos
select PacNombres   as nombre, PacApellido as apellido, PacGenero as sexo 
from pacientes;


-- alias a las  tablas
select * from tratamientos as a;
select * from tratamientos  a;

-- clausula where
select PacNombres as nombre, PacApellido as apellido, 
PacGenero as sexo from  pacientes where  PacGenero = 'm' ;

-- clausa order by
select PacNombres as nombre, PacApellido as apellido, 
PacGenero as sexo from  pacientes where PacGenero = 'F'
order by PacNombres desc;


-- JOIN  ENTRE DOS TABLAS

select PacIdentificacion, PacNombres, PacApellido, TraDescripcion
from pacientes as a
join tratamiento as b
on 
a.PacIdentificacion = b.TraPacientes
where a.PacGenero = 'M';


-- SUBCOSULTAS 

select  PacNombres, PacApellido from pacientes
where PacIdentificacion not in (select TraPacientes from tratamiento);


-- seleccionar los campos de quiero solo de esas tabla

select PacNombres, PacApellidos, Pacgenero from pacientes;

-- alias a los campos
select PacNombres as nombre, PacApellido as apellido, Pacgenero as sexo from pacientes;

-- alias a las tablas
select * from tratamiento as a;
select * from tratamiento a;

-- clausula where

select PacNombres as nombre, PacApellido as apellido, Pacgenero as sexo 
from pacientes where Pacgenero = 'M';

-- clausula order by
select PacNombres as nombre, PacApellido as apellido, Pacgenero as sexo 
from pacientes where Pacgenero = 'M' order by PacNombres, PacApellido desc;
-- asc (ascendente ordenar) desc (descendente ordenar)

-- SUBCONSULTAS
select PacNombres, PacApellido from pacientes 
where PacIdentificacion not in (select Trapacientes from tratamiento );

-- JOIN  ENTRE DOS TABLAS

select PacIdentificacion, PacNombres, PacApellido, Tradescripcion 
from pacientes as a
join tratamiento as b
on 
a.PacIdentificacion = b.TraPacientes
where a.Pacgenero = 'M';

-- 21234594,12458905,13445677

select PacNombres, PacApellido from pacientes as p
left join tratamiento as t 
on p.PacIdentificacion = t.TraPacientes
where t.TraPacientes is null;


select CitMedico, count(*) as max_citas from citas
where CitConsultorio = "324";

select avg (year(curdate()) - year (PaFechaNcimiento)) as 'promedio de edad'
from pacientes where Pacgenero = 'M' ;

select avg (year(curdate()) - year (PaFechaNcimiento)) as 'edad promedio:' from pacientes 
where PacIdentificacion in (select TraPacientes from tratamiento); 

