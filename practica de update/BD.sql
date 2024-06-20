create schema FOTO;
use FOTO;


create table Tb_usuarios(
	documento varchar (10) not null primary key,
    nombre varchar(20) not null,
    fec_nac datetime not null,
    foto varchar (200)  null,
	contraseña varchar(200) not null
);

select * from Tb_usuarios;
