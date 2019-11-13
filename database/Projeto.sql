drop database if exists Projeto;
create database Projeto;

use Projeto;

create table Funcionario (
	Matricula int primary key not null auto_increment,
    nome varchar(100) not null,
    idade int not null,
    email varchar(50) not null,
    usuario varchar(20) not null,
    senha varchar(100) not null
);

create table Aluno (
    Matricula int primary key not null auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    usuario varchar(50) not null,
    senha varchar(100) not null

);

insert into Funcionario (nome, idade, email, usuario, senha) values('Joao Guedes', 24, 'joo_guedes@live.com', 'jooGuedes', '$argon2i$v=19$m=1024,t=2,p=2$amJXMTVKZXBCUExCN0Z2RQ$vuy2Gbmoag71H5T6otHs66eY+tU+3AKDdGhdAkNuzCw');
insert into Aluno (nome, email, usuario, senha) values('Joao Guedes', 'test@ifrn.edu.br', 'teste', '$argon2i$v=19$m=1024,t=2,p=2$ajg4OWdEb0pKYmVIb2FGUA$XyfOE0U5Is6WzVroGpcuRFfK1xGQspwsfG0KmqSMT9U');

select * from Funcionario;
select * from Aluno;