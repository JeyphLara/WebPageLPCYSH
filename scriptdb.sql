create database laboratorio_de_paz;
create table pre_inscripcion( fecha DATE,Nombres varchar(30),Apellidos varchar(30),Tipo_documento varchar(3),Numero_documento int(10),Correo varchar(27),Edad int(2),Sexo varchar(20), Celular int(10), Ciudad varchar(30), primary key(Numero_documento));
insert into pre_inscripcion values("04/04/2022","juanito alimaña","perez lara","CC",1004615601,"juanito@gmail.com",29,"Masculino",1111111111,"tumaco");

create table usuarios(Usuario varchar(30), Contraseña varchar(12));
insert into usuarios values ("capitan", "1234567890");

create table usuarios_cali(Usuario varchar(30), Contraseña varchar(12));
insert into usuarios_cali values ("Jfelipe", "1234567890");

create table solicitante(Correo varchar(40), nombre varchar(20), Motivo varchar(200));
insert into solicitante values ("juanito@gmail.com", "juanito", "quiero formar parte");

create table monitores( Nombres varchar(30),Apellidos varchar(30),Tipo_documento varchar(3),Numero_documento int(10),Correo varchar(27),Edad int(2),Sexo varchar(20), Celular int(10), Educacion varchar(30), Carrera varchar(30),Ciudad varchar(30), primary key(Numero_documento));
insert into monitores values("juanito alimaña","perez lara","CC",1004615601,"juanito@gmail.com",29,"Masculino",1111111111,"IU Uniajc","ing sistemas","cali");