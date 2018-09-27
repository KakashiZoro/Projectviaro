create database  `colegio`
use colegio;
 
CREATE TABLE alumno (
  id int(10) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  genero varchar(10) NOT NULL,
  fecha_nacimiento date NOT NULL,
  PRIMARY KEY (id)
) ;

create table profesor (
id int (10) not null auto_increment,
 nombre varchar(50) not null,
 apellido varchar(50) not null,
 genero varchar (10) not null,
 primary key (id)
 );

create table grado(
id int(10) not null auto_increment,
nombre varchar(50) not null,
profesor_id int(10) not null,
primary key (id),
foreign key  (profesor_id) references profesor(id)
); 

create table alumnogrado(
id int(10) not null auto_increment,
alumnoid int(10) not null,
gradoid int(10) not null,
seccion varchar(5),
primary key (id),
foreign key (alumnoid) references alumno(id),
foreign key (gradoid) references grado(id)
);


-- datos quemados de tablas, profesor, grado, alumnogrado en phpmyadmin.



 