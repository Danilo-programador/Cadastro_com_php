create database projetoPhp;
 
 use projetoPhp;
 
 create table usuario (
    id int not null auto_increment,
    nome varchar(40) not null,
    email varchar(40) not null,
    senha varchar(200) not null,
	telefone varchar(30) not null,
    primary key(id)
 );