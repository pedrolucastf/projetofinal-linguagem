create table usuarios
(
    id int not null primary key auto_increment,
    nome varchar (255) not null, 
    usuario varchar (255) not null,
    email varchar (255) not null, 
    senha varchar (255) not null
);

insert into usuarios (nome, usuario, email, senha) VALUES ('Admin do Sistema', 'admin', 'admin@sp.senac.com.br', '1234');