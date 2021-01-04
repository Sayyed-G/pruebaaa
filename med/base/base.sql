create database medcur;
use medcur;

create table Cliente(
dni varchar(9),
nombre varchar(50),
direccion varchar(50),
suscrito int,
primary key (DNI),
constraint fk_sub foreign key (suscrito) references Publicacion(id)
);

create table Publicacion(
id int auto_increment,
nombre varchar(20),
tema varchar(20),
descripcion varchar(80),
primary key(id)
);

create table Numero(
id int auto_increment,
fecha date,
resumen varchar(300),
publicacion int,
primary key(id),
constraint fk_NumeroPublicacion foreign key(publicacion) references Publicacion(id)
);