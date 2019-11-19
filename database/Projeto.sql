drop database if exists Projeto;
create database Projeto;

use Projeto;

create table Aluno (
    id int primary key not null auto_increment,
    nome varchar(50) not null,
    dataNascimento date not null,
    nomeMae varchar(50),
    nomePai varchar(50),
    rg varchar(11) not null,
    cpf varchar(15) not null,
    naturalidade varchar(20),
    endereco text not null,
    telefone varchar(25) not null,
    sexo varchar(10) not null,
    senha varchar(100) not null,
    nlogin int

);

create table Responsavel (
	id int primary key not null auto_increment,
    idAluno int not null,
    cpf varchar(15) not null,
    rg varchar(11) not null,
    telefone varchar(25) not null,
    email varchar(50),
    nome varchar(50) not null,
    senha varchar(100) not null,
    nlogin int
);

create table Funcionario (
	id int primary key not null auto_increment,
    nome varchar(100) not null,
    idade int not null,
    cpf varchar(14) not null,
    email varchar(50) not null,
    telefone varchar(15) not null,
    cargo varchar(15) not null,
    senha varchar(100),
    nlogin int
);

create table Boletim (
    id int primary key not null auto_increment,
    idAluno int not null,
    disciplinas varchar(10) not null,
    notas float,
    fequencia float
);

create table Proejto (
    id int primary key not null auto_increment,
    tema varchar(100) not null,
    conteudo text not null,
    dataPublicacao date not null,
    periodo date not null
);


create table Solicitacao (
    id int primary key not null auto_increment,
    dataPedido date not null,
    solicitante varchar(50) not null,
    descricao text not null,
    situacao varchar(20)
);

create table Turma (
    id int primary key not null auto_increment,
    idAluno int not null,
    idProfessor int not null,
    nome varchar(10) not null,
    turno varchar(10) not null,
    anoSerie varchar(10) not null
);

insert into Funcionario (nome, idade, cpf, email, telefone, cargo, senha, nlogin) 
	values('Joao Guedes', 24, '111.222.333-44', 'joo_guedes@live.com', '(84)99421-3471', 'Professor', 
    '$argon2i$v=19$m=1024,t=2,p=2$amJXMTVKZXBCUExCN0Z2RQ$vuy2Gbmoag71H5T6otHs66eY+tU+3AKDdGhdAkNuzCw',
    0);
insert into Aluno (nome, dataNascimento, nomeMae, nomePai, rg, cpf, naturalidade,
	endereco, telefone, sexo, senha, nlogin) 
	values('Joao Guedes de Moura Junior', '1995-05-12', 'Maria da Penha', 'João Guedes', '111.222.333',
    '111.222.333-44', 'Natal', 'Sítio Cajazeiras', '(84) 9 9494-9494', 'Masculino',
    '$argon2i$v=19$m=1024,t=2,p=2$ajg4OWdEb0pKYmVIb2FGUA$XyfOE0U5Is6WzVroGpcuRFfK1xGQspwsfG0KmqSMT9U', 0);

select * from Funcionario;
select * from Aluno;