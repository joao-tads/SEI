drop database if exists Projeto;
create database Projeto;

use Projeto;

create table Funcionario (
	MatriculaFuncionario int primary key not null auto_increment,
    nome varchar(100) not null,
    idade int not null,
    email varchar(50) not null,
    usuario varchar(20) not null,
    senha varchar(20) not null
);

create table Aluno (
    idAluno int primary key not null auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    usuario varchar(50) not null,
    senha varchar(10) not null

);

insert into Funcionario (Nome, idade, usuario, senha) values('Joao Guedes', 24, 'jooGuedes', '5f65bb29612cf8720d70c568c7a30c55');
insert into Aluno (Nome, idade, usuario, senha) values('Joao Guedes', 24, 'jooGuedes', '6c1271272217f7bb5da41f5f46f88e05');

select * from Funcionario;
select * from Aluno;
