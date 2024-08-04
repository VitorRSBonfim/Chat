create database Chat
use Chat
 
create table usuario
(
	ID_Usuario int not null auto_increment primary key ,
	Nome_Usuario varchar(50) not null  ,
	Login_Usuario varchar(40) not null unique ,
	Senha_Usuario varchar(20) not null  ,
	createAtUsuario timestamp not null,
	deletedAtUsuario timestamp null,
	Status_Usuario char(8) not null default 'ATIVO' 
)

create table Amizade 
(
	ID_Amizade int not null primary key auto_increment,
	ID_UserA int not null,
	ID_UserB int not null,
	Status_Amizade char(1) not null default "A",

	constraint FK_ID_UserA foreign key (ID_UserA) references usuario (ID_Usuario),
	constraint FK_ID_UserB foreign key (ID_UserB) references usuario (ID_Usuario)

)

create table mensagem 
(
	ID_Mensagem int not null primary key auto_increment,
	ID_Mensagem_UsuarioSender int not null,
	ID_Mensagem_UsuarioReceiver int not null,
	Data_Mensagem timestamp not null,

	constraint FK_ID_Mensagem_UsuarioSender foreign key (ID_Mensagem_UsuarioSender) references usuario (ID_Usuario),
	constraint FK_ID_Mensagem_UsuarioReceiver foreign key (ID_Mensagem_UsuarioReceiver) references usuario (ID_Usuario)


)

select * from mensagem

insert into Amizade (
	ID_UserA, ID_UserB
) values (
	1, 2
)

insert into usuario (
    Nome_Usuario, Login_Usuario, Senha_Usuario
) values (
	'user-001', 'user-001@gmail.com', '123456'
)

insert into usuario (
	Nome_Usuario, Login_Usuario, Senha_Usuario
) values (
	'user-002', 'user-002@gmail.com', '123456'
)
