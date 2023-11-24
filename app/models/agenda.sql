DROP DATABASE IF EXISTS empresa;

create database if not exists empresa;
use empresa;
create table if not exists personal(
id varchar(100)not null,
nombre varchar(100),
apellido varchar(100),
telefono varchar(20),
correo varchar(100)
);
create table if not exists inventario(
departamento_id varchar(50)not null,
nombre_departamento varchar(100)
);