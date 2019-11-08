drop database if exists Projeto;
create database Projeto;

use Projeto;

create table Professor (
	idProfessor int primary key not null auto_increment,
    Nome varchar(100) not null,
    idade int not null,
    usuario varchar(20) not null,
    senha varchar(20) not null
);

insert into professor (Nome, idade, usuario, senha) values('Joao Guedes', 24, 'jooGuedes', 'Junior12');

select * from Professor;