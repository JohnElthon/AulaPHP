create database helpdesk;
    create table usuarios (
    id_usuario int primary key auto_increment,
    nome varchar(120),
    email varchar(120),
    senha varchar(100),
    perfil varchar(50)
    );
 
    create table chamados (
	id_chamado int primary key auto_increment,
    titulo varchar(90),
	categoria varchar(90), 
    descricao longtext, 
    id_usuario int,
    Constraint fkChamadoUsuario foreign key (id_usuario) references usuarios (id_usuario)
    );
    select * from usuarios;
    select * from chamados;
    
    INSERT INTO usuarios  (nome, email, senha, perfil)
    values ('John', 'john@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrador');
    
    SELECT count(statuschamado) as 'Total' FROM chamados WHERE statuschamado ='Aberto';
alter table chamados

add statuschamado varchar(50),
add descricaotecnico longtext,
add valor double
;
update usuarios
	set perfil = 'Adm'
    where id_usuario = 1;
