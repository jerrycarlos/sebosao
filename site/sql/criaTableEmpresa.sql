create table usuario(
    id int primary key AUTO_INCREMENT NOT NULL,
    nome varchar(150) NOT NULL,    
    cpf varchar(11) unique NOT NULL,
    email varchar(150) unique NOT NULL,    
    login varchar(30) unique NOT NULL,
    senha varchar(30) NOT NULL, 
    acesslevel int not null     
);


create table empresa(
    id int primary key AUTO_INCREMENT NOT NULL,    
    nome varchar(200) unique NOT NULL,
    telefone varchar(11) NOT NULL, 
    rua varchar(50) not null,
    bairro varchar(50) not null,
    numero int,
    complemento varchar(50),
    descricao varchar(500) not null,
    fk_proprietario int,
    foreign key (fk_proprietario) references usuario(id) 
);