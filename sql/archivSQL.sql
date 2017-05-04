

create database login;

create table usuario(
codUsuario int auto_increment,
loginUsuario varchar (30) NOT NULL,
senhaUsuario varchar (10) NOT NULL,
primary key  (codUsuario)
);